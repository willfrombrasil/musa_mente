<?php

namespace App\Services;

use App\Repositorys\TesteRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\{getTeste, sendMail, questTest, conectLeadlovers};
use Illuminate\Routing\Route;

class TesteService
{
    protected $repository;
    protected $getTeste;
    protected $sendMail;
    protected $questTest;
    protected $conectLeadlovers;

    public function __construct(TesteRepository $repository, getTeste $getTeste, sendMail $sendMail, questTest $questTest, conectLeadlovers $conectLeadlovers)
    {
        $this->repository = $repository;
        $this->getTeste = $getTeste;
        $this->sendMail = $sendMail;
        $this->questTest = $questTest;
        $this->conectLeadlovers = $conectLeadlovers;
    }

    public function show()
    {
        try {
            $response = $this->repository->buscarTeste(explode('/', $_SERVER["REQUEST_URI"]));
            $var = [];

            $arr = [
                "Atena" => (int) $response->atena,
                "Afrodite" => (int) $response->afrodite,
                "Perséfone" => (int) $response->persefone,
                "Ártemis" => (int) $response->artemis,
                "Deméter" => (int) $response->demeter,
                "Hera" => (int) $response->hera,
            ];

            arsort($arr);

            foreach ($arr as $key => $value) {
                $var[] = ['deusa' => $key, 'pnt' => $value];
            }

            if (!in_array($response, [null, false])) {
                return view('cliente.show', [
                    'resultado' => $response,
                    'result' => $var
                ]);
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function index()
    {
        $var = $this->questTest->questTest();

        return view('cliente.index', [
            'dad' => $var
        ]);
    }

    public function store($request)
    {
        try {
      
            $val = $this->getTeste->getTeste($request);

            $log = [
                'protocolo_teste' => $val['protocolo'],
                'aplication' => 'web',
                'action' => '',
                'status' => '',
                'messagem' => ''
            ];

            if (!in_array($val, [null, false])) {

                $response = $this->repository->salvarTeste($val, $log);
                
                if (!in_array($response, [null, false])) {
                    
                    // $sendEmail = $this->sendMail->enviar($response, $log);

                    $sendEmail = true;

                    // $this->repository->email_sent($response, $log);

                    if ($sendEmail) {

                        $registraLeadlovers = $this->conectLeadlovers->registrar($response, $log);

                        if ($registraLeadlovers) {
                            return view('cliente.obg', [
                                'resultado' => $response
                            ]);
                        } else {
                            return view('404');
                        }                      
                    } else {
                        return view('404');
                    }
                } else {
                    return view('404');;
                }

            } else {
                return view('404');
            }

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function admin()
    {
        try {
            $response = $this->repository->listarTeste();
            
            if (!in_array($response, [null, false])) {
                return view('admin.index', [
                    'resultado' => $response,
                    'usuario' => Auth::user()->name
                ]);
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function filter($request)
    {
        try {
            $response = $this->repository->listarTesteFilters($request);

            if (!in_array($response, [null, false])) {
                return view('admin.index', [
                    'resultado' => $response,
                    'usuario' => Auth::user()->name
                ]);
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function relatorio()
    {
        try {

            $response = $this->repository->consultarRelatorio();

            $response = $this->trataDados($response[0] , $response[1]);

            if (!in_array($response, [null, false])) {
                return view('admin.relatorio', [
                    'resultado' => $response,
                    'usuario' => Auth::user()->name
                ]);
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function fakeApi()
    {
        try {
            $data = file_get_contents('http://dev.3wonline.com/api/public/api/json/fakePessoa');
            $dadosSite = json_decode($data, true);

            foreach ($dadosSite as $key => $value) {
                $val = [-1, 1, 2, 3];
                for ($i = 1; $i <= 84; $i++) {
                    $num = rand(0, 3);
                    $post["qst$i"] = $val[$num];
                }

                $post["nome"] = $value['nome'];
                $post["email"] = $value['email'];
                $post["fone"] = $value['celular'];

                if ($val = $this->getTeste->getTeste($post)) {
                    if ($response = $this->repository->salvarTeste($val)) {
                        $fake[] = $response;
                    };
                };
            }

            return response()->json($fake, 200);
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function testeApi($request)
    {
        try {
            $return = [
                'status' => false,
                'mensagem' => false,
                'teste' => false
            ];

            $val = $this->getTeste->getTeste($request);

            $log = [
                'protocolo_teste' => $val['protocolo'],
                'aplication' => 'api',
                'action' => '',
                'status' => '',
                'messagem' => ''
            ];

            
            if (!in_array($val, [null, false])) {

                $response = $this->repository->salvarTeste($val, $log);

                if (!in_array($response, [null, false])) {

                    // $sendEmail = $this->sendMail->enviar($response, $log);
                    $sendEmail = true;
                    
                    if ($sendEmail) {

                        $registraLeadlovers = $this->conectLeadlovers->registrar($response, $log);

                        if ($registraLeadlovers) {
                            $return['status'] = 'success';
                            $return['mensagem'] = 'Teste Salvo, Email Enviado, Leadlovers Registrado.';
                            $return['teste'] = $response;
                            return response()->json($return, 200);
                        } else {
                            $return['status'] = 'error';
                            $return['mensagem'] = 'Erro ao enviar para o leadlovers. Teste Salvo e Email Enviado.';
                            $return['teste'] = $response;
                            return response()->json($return, 401);
                        }                      
                    } else {
                        $return['status'] = 'error';
                        $return['mensagem'] = 'Falha ao encamihar email. Teste Salvo. Não registrado no Leadlovers.';
                        $return['teste'] = $response;
                        return response()->json($return, 401);
                    }
                } else {
                    $return['status'] = 'error';
                    $return['mensagem'] = 'Falha ao salvar teste';
                    $return['teste'] = $response;
                    return response()->json($return, 401);
                }

            } else {
                $return['status'] = 'error';
                $return['mensagem'] = 'Falha ao processar Teste.';
                $return['teste'] = false;
                return response()->json($return, 401);
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function importApi($request)
    {
        try {

            if ($request['tip'] == "import1") {
                foreach ($request['arr'] as $key => $value) {
                    $response[] = $this->repository->salvarTeste($this->getTeste->import1($value));
                }
            } else if ($request['tip'] == "import2") {
                foreach ($request['arr'] as $key => $value) {
                    $response[] = $this->repository->salvarTeste($this->getTeste->import2($value));
                }
            }

            return response()->json($response, 200);
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function testeSendMail($request)
    {
        try {
            
            $log = [
                'protocolo_teste' => uniqid(),
                'aplication' => 'api',
                'action' => '',
                'status' => '',
                'messagem' => ''
            ];

            $response = count($request) > 0 ? (Object) $request : false;

            if (!in_array($response, [null, false])) {
                // $sendEmail = $this->sendMail->enviar($response, $log);

                $sendEmail = true;
                
                if ($sendEmail) {
                    return response()->json($sendEmail, 200);
                } else {
                    return response()->json($sendEmail, 401);
                }
            } else {
                return response()->json($response, 401);
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    private function trataDados($a1, $a2){
        $arr = [];
    
        foreach ($a1 as $key => $value) {
            if($key == 'total_registros'){
                $arr[$key] = intval($value);
            }
            if(substr($key,0,4) == 'soma'){
                $arr['soma'][$key] = intval($value);
            }
            if(substr($key,0,5) == 'media'){
                $arr['media'][$key] = floatval($value);
            }
        }
        
        foreach ($a2 as $k => $v) {
            $c = 0;
            foreach ($v as $key => $val) {
                if($val > $c){
                    $a[$k] = 'qtd_'.$key;
                    $c = $val;
                }
            } 
        }
    
        $arr['quantidade'] = array_count_values($a);
    
        return $arr;
    
    }
}
