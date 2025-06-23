<?php

namespace App\Services;

use App\Repositorys\TesteRepository;
use Illuminate\Support\Str;
use stdClass;

class conectLeadlovers
{
    public function __construct(TesteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function registrar($dados, $log)
    {
        // $cadastroDoubleOptin = $this->cadastroDoubleOptin($dados, $log);
        $cadastroSequenciaInicial = $this->cadastroSequenciaInicial($dados, $log);

        // if($cadastroDoubleOptin && $cadastroSequenciaInicial){
        if($cadastroSequenciaInicial){
            return true;
        } else {
            return false;
        }
    }

    public function cadastroDoubleOptin($dados, $log){
        try {

            $body = new stdClass();
            $body->MachineCode = 700465;
            $body->EmailSequenceCode = 1635667;
            $body->SequenceLevelCode = 1;
            $body->name = $dados->nome;
            $body->email = $dados->email;    
           
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://llapi.leadlovers.com/webapi/lead?token=83EEC4AB1E584A138B609B6B4E0CBED1',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>json_encode($body),
                CURLOPT_HTTPHEADER => array(
                  'Content-Type: application/json',
                  'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIl0sImlzcyI6Imh0dHA6Ly93ZWJhcGlsbC5henVyZXdlYnNpdGVzLm5ldCIsImF1ZCI6IjFhOTE4YzA3NmE1YjQwN2Q5MmJkMjQ0YTUyYjZmYjc0IiwiZXhwIjoxNjA1NDQxMzM4LCJuYmYiOjE0NzU4NDEzMzh9.YIIpOycEAVr_xrJPLlEgZ4628pLt8hvWTCtjqPTaWMs'
                ),
              ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);

            $response = json_decode($response, true);

            if($response && $response['StatusCode'] == 200 && $response['Message'] == "Novo lead inserido na fila para processamento." && $response['Exception'] == null){
                $this->repository->cad_mail_mkt($dados, $log);
                $log['action'] = 'cadastro leadlovers';
                $log['status'] = 'success';
                $log['messagem'] = json_encode($response);
                $this->repository->registraLog($log);
                return true;
            } else {
                $log['action'] = 'cadastro leadlovers';
                $log['status'] = 'error';
                $log['messagem'] = json_encode($response);
                $this->repository->registraLog($log);
                return false;
            }

        } catch (\Throwable $th) {
            $log['action'] = 'cadastro leadlovers';
            $log['status'] = 'error';
            $log['messagem'] = $th->getMessage();
            $this->repository->registraLog($log);
            throw $th;
        }
    }

    public function cadastroSequenciaInicial($dados, $log){
        try {

            $body = new stdClass();
            $body->MachineCode = 700465;
            $body->EmailSequenceCode = 1635668;
            $body->SequenceLevelCode = 1;
            $body->name = $dados->nome;
            $body->email = $dados->email;    
           
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://llapi.leadlovers.com/webapi/lead?token=83EEC4AB1E584A138B609B6B4E0CBED1',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>json_encode($body),
                CURLOPT_HTTPHEADER => array(
                  'Content-Type: application/json',
                  'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIl0sImlzcyI6Imh0dHA6Ly93ZWJhcGlsbC5henVyZXdlYnNpdGVzLm5ldCIsImF1ZCI6IjFhOTE4YzA3NmE1YjQwN2Q5MmJkMjQ0YTUyYjZmYjc0IiwiZXhwIjoxNjA1NDQxMzM4LCJuYmYiOjE0NzU4NDEzMzh9.YIIpOycEAVr_xrJPLlEgZ4628pLt8hvWTCtjqPTaWMs'
                ),
              ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);

            $response = json_decode($response, true);

            if($response && $response['StatusCode'] == 200 && $response['Message'] == "Novo lead inserido na fila para processamento." && $response['Exception'] == null){
                $this->repository->cad_mail_mkt($dados, $log);
                $log['action'] = 'cadastro leadlovers';
                $log['status'] = 'success';
                $log['messagem'] = json_encode($response);
                $this->repository->registraLog($log);
                return true;
            } else {
                $log['action'] = 'cadastro leadlovers';
                $log['status'] = 'error';
                $log['messagem'] = json_encode($response);
                $this->repository->registraLog($log);
                return false;
            }

        } catch (\Throwable $th) {
            $log['action'] = 'cadastro leadlovers';
            $log['status'] = 'error';
            $log['messagem'] = $th->getMessage();
            $this->repository->registraLog($log);
            throw $th;
        }
    }
}
