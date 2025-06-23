<?php

namespace App\Services;

use App\Mail\NewTest;
use App\Repositorys\TesteRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;

class sendMail
{
    public function __construct(TesteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function enviar($dados, $log)
    {
        try {           
            $user = new stdClass();
            $user->name = $dados->nome;
            $user->email = $dados->email;
            $user->link = isset($dados->chave) && isset($dados->protocolo) ? route('cliente.show', ['chave' => $dados->chave, 'protocolo' => $dados->protocolo]):"#";
            Mail::send(new NewTest($user));

            $this->repository->email_sent($dados, $log);
            $log['action'] = 'envio de email';
            $log['status'] = 'success';
            $log['messagem'] = 'email enviado com sucesso';
            $this->repository->registraLog($log);
            return true;
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            $log['action'] = 'envio de email';
            $log['status'] = 'error';
            $log['messagem'] = $th->getMessage();
            $this->repository->registraLog($log);
            throw $th;
        }
    }
}
