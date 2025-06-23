<?php

namespace App\Repositorys;

use App\Models\Teste;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

class TesteRepository
{
    protected $teste;
    protected $log;

    public function __construct(Teste $teste, Log $log)
    {
        $this->teste = $teste;
        $this->log = $log;
    }

    public function buscarTeste($url)
    {
        try {
            $chave = $url[1] ? $url[1] : false;
            $protocolo = $url[2] ? $url[2] : false;
            if (empty($chave) || empty($protocolo)) {
                return null;
            } else {
                return $this->teste->where('deletado', 0)->where('chave', $chave)->where('protocolo', $protocolo)->first();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listarTeste()
    {
        try {
            $perPage = 10; // Set the number of items per page as needed

            $results = $this->teste
                ->where('deletado', 0)
                ->orderBy('data', 'desc')
                ->paginate($perPage);
                
            return $results;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

public function listarTesteFilters($dados)
    {
        try {
            $perPage = $dados->input('items_per_page', 10);
            $startDate = $dados->input('start_date');
            $endDate = $dados->input('end_date');
            $searchTerm = $dados->input('search_term');

            $query = $this->teste
                ->where('deletado', 0);

            if ($startDate) {
                $query->where('data', '>=', $startDate);
            }

            if ($endDate) {
                $query->where('data', '<=', $endDate);
            }

            if ($searchTerm) {
                $query->where(function($q) use ($searchTerm) {
                    $columns = ['nome', 'email', 'fone']; // Add more columns as needed
                    foreach ($columns as $column) {
                        $q->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                    }
                });
            }

            $results = $query
                ->orderBy('data', 'desc')
                ->paginate($perPage);

                        
            return $results;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function registraLog($log)
    {
        try {
            return $this->log->create($log);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function salvarTeste($request, $log)
    {
        try {
            $teste = $this->teste->create($request);
            $log['action'] = 'registro teste';
            $log['status'] = 'success';
            $log['messagem'] = 'teste registrado com sucesso';
            $this->registraLog($log);
            return $teste;
        } catch (\Throwable $th) {
            $log['action'] = 'registro teste';
            $log['status'] = 'error';
            $log['messagem'] = $th->getMessage();
            $this->registraLog($log);
            throw $th;
        }
    }

    public function consultarRelatorio()
    {
        try {
            $dados[] = Teste::select(
                \DB::raw('COUNT(*) as total_registros'),
                \DB::raw('SUM(atena) as soma_atena'),
                \DB::raw('SUM(afrodite) as soma_afrodite'),
                \DB::raw('SUM(persefone) as soma_persefone'),
                \DB::raw('SUM(artemis) as soma_artemis'),
                \DB::raw('SUM(demeter) as soma_demeter'),
                \DB::raw('SUM(hera) as soma_hera'),
                \DB::raw('AVG(atena) as media_atena'),
                \DB::raw('AVG(afrodite) as media_afrodite'),
                \DB::raw('AVG(persefone) as media_persefone'),
                \DB::raw('AVG(artemis) as media_artemis'),
                \DB::raw('AVG(demeter) as media_demeter'),
                \DB::raw('AVG(hera) as media_hera')
            )->first()->toArray();

            $dados[] = Teste::select('atena', 'afrodite', 'persefone', 'artemis', 'demeter', 'hera')->get()->toArray();

            return $dados;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
        
    public function psq_mail($request)
    {
        try {
            return $this->teste->where('deletado', 0)->where('email', $request)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function email_sent($request, $log)
    {
        try {
            
            $email = $this->teste->where('deletado', 0)->where('sent_mail', 0)->where('email', $request->email)->where('protocolo', $request->protocolo)->update(['sent_mail' => 1]);
            $log['action'] = 'envio de email';
            $log['status'] = 'success';
            $log['messagem'] = 'email enviado com sucesso';
            $this->registraLog($log);
            return $email;
        } catch (\Throwable $th) {
            $log['action'] = 'envio de email';
            $log['status'] = 'error';
            $log['messagem'] = $th->getMessage();
            $this->registraLog($log);
            throw $th;
        }
    }

    public function cad_mail_mkt($request, $log)
    {
        try {
            $emailMKT = $this->teste->where('deletado', 0)->where('mail_mkt', 0)->where('email', $request->email)->where('protocolo', $request->protocolo)->update(['mail_mkt' => 1]);
            $log['action'] = 'cadastro leadlovers';
            $log['status'] = 'success';
            $log['messagem'] = 'cadastro leadlovers realizado com sucesso';
            $this->registraLog($log);
            return $emailMKT;
        } catch (\Throwable $th) {
            $log['action'] = 'cadastro leadlovers';
            $log['status'] = 'error';
            $log['messagem'] = $th->getMessage();
            $this->registraLog($log);
            throw $th;
        }
    }
}
