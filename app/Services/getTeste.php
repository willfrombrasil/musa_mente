<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class getTeste
{
    public function import1($dados)
    {
        try {
            $info['chave'] = (string) Str::uuid();
            $info['protocolo'] = uniqid() . date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
            $info['nome'] = !empty($dados['nome']) ? preg_replace('/[^a-zA-Z0-9\s]/', '', $dados['nome']) : '';
            $info['email'] = !empty($dados['email']) ? $dados['email'] : '';
            $info['fone'] = !empty($dados['fone']) ? $dados['fone'] : '';
            $info['data'] = !empty($dados['data']) ? date($dados['data']) : date("Y-m-d H:i:s");
            $info['atena'] = !empty($dados['atena']) ? $dados['atena'] : '';
            $info['afrodite'] = !empty($dados['afrodite']) ? $dados['afrodite'] : '';
            $info['persefone'] = !empty($dados['persefone']) ? $dados['persefone'] : '';
            $info['artemis'] = !empty($dados['artemis']) ? $dados['artemis'] : '';
            $info['demeter'] = !empty($dados['demeter']) ? $dados['demeter'] : '';
            $info['hera'] = !empty($dados['hera']) ? $dados['hera'] : '';
            $info['teste'] = '';

            return $info;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function import2($dados)
    {
        try {
            $info['chave'] = !empty($dados['chave']) ? $dados['chave'] :(string) Str::uuid();
            $info['protocolo'] = !empty($dados['protocolo']) ? $dados['protocolo'] : uniqid() . date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
            $info['nome'] = !empty($dados['nome']) ? preg_replace('/[^a-zA-Z0-9\s]/', '', $dados['nome']) : '';
            $info['email'] = !empty($dados['email']) ? $dados['email'] : '';
            $info['fone'] = !empty($dados['fone']) ? $dados['fone'] : '';
            $info['data'] = !empty($dados['data']) ? date($dados['data']) : date("Y-m-d H:i:s");

            foreach ($dados as $key => $value) {
                if (substr($key, 0, 3) == "qst") {
                    $val[$key] = intval($value);
                }
            }

            $info['atena'] = intval($val['qst6']) + intval($val['qst7']) + intval($val['qst14']) + intval($val['qst21']) + intval($val['qst28']) + intval($val['qst34']) + intval($val['qst42']) + intval($val['qst45']) + intval($val['qst52']) + intval($val['qst59']) + intval($val['qst61']) + intval($val['qst69']) + intval($val['qst78']) + intval($val['qst79']);
            $info['afrodite'] = intval($val['qst5']) + intval($val['qst9']) + intval($val['qst17']) + intval($val['qst20']) + intval($val['qst30']) + intval($val['qst31']) + intval($val['qst39']) + intval($val['qst44']) + intval($val['qst53']) + intval($val['qst56']) + intval($val['qst64']) + intval($val['qst72']) + intval($val['qst77']) + intval($val['qst80']);
            $info['persefone'] = intval($val['qst3']) + intval($val['qst10']) + intval($val['qst16']) + intval($val['qst24']) + intval($val['qst25']) + intval($val['qst35']) + intval($val['qst37']) + intval($val['qst48']) + intval($val['qst54']) + intval($val['qst55']) + intval($val['qst62']) + intval($val['qst70']) + intval($val['qst75']) + intval($val['qst81']);
            $info['artemis'] = intval($val['qst2']) + intval($val['qst8']) + intval($val['qst18']) + intval($val['qst19']) + intval($val['qst29']) + intval($val['qst33']) + intval($val['qst40']) + intval($val['qst47']) + intval($val['qst49']) + intval($val['qst57']) + intval($val['qst66']) + intval($val['qst68']) + intval($val['qst76']) + intval($val['qst82']);
            $info['demeter'] = intval($val['qst1']) + intval($val['qst12']) + intval($val['qst15']) + intval($val['qst22']) + intval($val['qst27']) + intval($val['qst32']) + intval($val['qst41']) + intval($val['qst46']) + intval($val['qst50']) + intval($val['qst60']) + intval($val['qst65']) + intval($val['qst67']) + intval($val['qst73']) + intval($val['qst83']);
            $info['hera'] = intval($val['qst4']) + intval($val['qst11']) + intval($val['qst13']) + intval($val['qst23']) + intval($val['qst26']) + intval($val['qst36']) + intval($val['qst38']) + intval($val['qst43']) + intval($val['qst51']) + intval($val['qst58']) + intval($val['qst63']) + intval($val['qst71']) + intval($val['qst74']) + intval($val['qst84']);

            $info['teste'] = jsonTeste($info, $val);

            return $info;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getTeste($dados)
    {
        try {
            $info['chave'] = (string) Str::uuid();
            $info['protocolo'] = uniqid() . date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
            $info['nome'] = !empty($dados['nome']) ? preg_replace('/[^a-zA-Z0-9\s]/', '', $dados['nome'])  : '';
            $info['email'] = !empty($dados['email']) ? $dados['email'] : '';
            $info['fone'] = !empty($dados['fone']) ? $dados['fone'] : '';
            $info['data'] = date("Y-m-d H:i:s");

            foreach ($dados as $key => $value) {
                if (substr($key, 0, 3) == "qst") {
                    $val[$key] = intval($value);
                }
            }

            $info['atena'] = intval($val['qst6']) + intval($val['qst7']) + intval($val['qst14']) + intval($val['qst21']) + intval($val['qst28']) + intval($val['qst34']) + intval($val['qst42']) + intval($val['qst45']) + intval($val['qst52']) + intval($val['qst59']) + intval($val['qst61']) + intval($val['qst69']) + intval($val['qst78']) + intval($val['qst79']);
            $info['afrodite'] = intval($val['qst5']) + intval($val['qst9']) + intval($val['qst17']) + intval($val['qst20']) + intval($val['qst30']) + intval($val['qst31']) + intval($val['qst39']) + intval($val['qst44']) + intval($val['qst53']) + intval($val['qst56']) + intval($val['qst64']) + intval($val['qst72']) + intval($val['qst77']) + intval($val['qst80']);
            $info['persefone'] = intval($val['qst3']) + intval($val['qst10']) + intval($val['qst16']) + intval($val['qst24']) + intval($val['qst25']) + intval($val['qst35']) + intval($val['qst37']) + intval($val['qst48']) + intval($val['qst54']) + intval($val['qst55']) + intval($val['qst62']) + intval($val['qst70']) + intval($val['qst75']) + intval($val['qst81']);
            $info['artemis'] = intval($val['qst2']) + intval($val['qst8']) + intval($val['qst18']) + intval($val['qst19']) + intval($val['qst29']) + intval($val['qst33']) + intval($val['qst40']) + intval($val['qst47']) + intval($val['qst49']) + intval($val['qst57']) + intval($val['qst66']) + intval($val['qst68']) + intval($val['qst76']) + intval($val['qst82']);
            $info['demeter'] = intval($val['qst1']) + intval($val['qst12']) + intval($val['qst15']) + intval($val['qst22']) + intval($val['qst27']) + intval($val['qst32']) + intval($val['qst41']) + intval($val['qst46']) + intval($val['qst50']) + intval($val['qst60']) + intval($val['qst65']) + intval($val['qst67']) + intval($val['qst73']) + intval($val['qst83']);
            $info['hera'] = intval($val['qst4']) + intval($val['qst11']) + intval($val['qst13']) + intval($val['qst23']) + intval($val['qst26']) + intval($val['qst36']) + intval($val['qst38']) + intval($val['qst43']) + intval($val['qst51']) + intval($val['qst58']) + intval($val['qst63']) + intval($val['qst71']) + intval($val['qst74']) + intval($val['qst84']);

            $info['teste'] = jsonTeste($info, $val);

            return $info;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

function jsonTeste($info, $val)
{
    try {
        $dad['identificao']['chave'] = $info["chave"];
        $dad['identificao']['protocolo'] = $info["protocolo"];
        $dad['identificao']['nome'] = $info["nome"];
        $dad['identificao']['email'] = $info["email"];
        $dad['identificao']['fone'] = $info["fone"];
        $dad['identificao']['data'] = $info["data"];

        foreach ($val as $key => $value) {
            if (substr($key, 0, 3) == "qst") {
                $dad['respostas']["questao" . substr($key, 3, 2)] = intval($value);
            }
        }

        $dad['resultado']['atena'] = intval($dad['respostas']['questao6']) + intval($dad['respostas']['questao7']) + intval($dad['respostas']['questao14']) + intval($dad['respostas']['questao21']) + intval($dad['respostas']['questao28']) + intval($dad['respostas']['questao34']) + intval($dad['respostas']['questao42']) + intval($dad['respostas']['questao45']) + intval($dad['respostas']['questao52']) + intval($dad['respostas']['questao59']) + intval($dad['respostas']['questao61']) + intval($dad['respostas']['questao69']) + intval($dad['respostas']['questao78']) + intval($dad['respostas']['questao79']);
        $dad['resultado']['afrodite'] = intval($dad['respostas']['questao5']) + intval($dad['respostas']['questao9']) + intval($dad['respostas']['questao17']) + intval($dad['respostas']['questao20']) + intval($dad['respostas']['questao30']) + intval($dad['respostas']['questao31']) + intval($dad['respostas']['questao39']) + intval($dad['respostas']['questao44']) + intval($dad['respostas']['questao53']) + intval($dad['respostas']['questao56']) + intval($dad['respostas']['questao64']) + intval($dad['respostas']['questao72']) + intval($dad['respostas']['questao77']) + intval($dad['respostas']['questao80']);
        $dad['resultado']['persefone'] = intval($dad['respostas']['questao3']) + intval($dad['respostas']['questao10']) + intval($dad['respostas']['questao16']) + intval($dad['respostas']['questao24']) + intval($dad['respostas']['questao25']) + intval($dad['respostas']['questao35']) + intval($dad['respostas']['questao37']) + intval($dad['respostas']['questao48']) + intval($dad['respostas']['questao54']) + intval($dad['respostas']['questao55']) + intval($dad['respostas']['questao62']) + intval($dad['respostas']['questao70']) + intval($dad['respostas']['questao75']) + intval($dad['respostas']['questao81']);
        $dad['resultado']['artemis'] = intval($dad['respostas']['questao2']) + intval($dad['respostas']['questao8']) + intval($dad['respostas']['questao18']) + intval($dad['respostas']['questao19']) + intval($dad['respostas']['questao29']) + intval($dad['respostas']['questao33']) + intval($dad['respostas']['questao40']) + intval($dad['respostas']['questao47']) + intval($dad['respostas']['questao49']) + intval($dad['respostas']['questao57']) + intval($dad['respostas']['questao66']) + intval($dad['respostas']['questao68']) + intval($dad['respostas']['questao76']) + intval($dad['respostas']['questao82']);
        $dad['resultado']['demeter'] = intval($dad['respostas']['questao1']) + intval($dad['respostas']['questao12']) + intval($dad['respostas']['questao15']) + intval($dad['respostas']['questao22']) + intval($dad['respostas']['questao27']) + intval($dad['respostas']['questao32']) + intval($dad['respostas']['questao41']) + intval($dad['respostas']['questao46']) + intval($dad['respostas']['questao50']) + intval($dad['respostas']['questao60']) + intval($dad['respostas']['questao65']) + intval($dad['respostas']['questao67']) + intval($dad['respostas']['questao73']) + intval($dad['respostas']['questao83']);
        $dad['resultado']['hera'] = intval($dad['respostas']['questao4']) + intval($dad['respostas']['questao11']) + intval($dad['respostas']['questao13']) + intval($dad['respostas']['questao23']) + intval($dad['respostas']['questao26']) + intval($dad['respostas']['questao36']) + intval($dad['respostas']['questao38']) + intval($dad['respostas']['questao43']) + intval($dad['respostas']['questao51']) + intval($dad['respostas']['questao58']) + intval($dad['respostas']['questao63']) + intval($dad['respostas']['questao71']) + intval($dad['respostas']['questao74']) + intval($dad['respostas']['questao84']);

        $dad['pontuacao']['sessao1'] = intval($dad['respostas']['questao1']) + intval($dad['respostas']['questao2']) + intval($dad['respostas']['questao3']) + intval($dad['respostas']['questao4']) + intval($dad['respostas']['questao5']) + intval($dad['respostas']['questao6']);
        $dad['pontuacao']['sessao2'] = intval($dad['respostas']['questao7']) + intval($dad['respostas']['questao8']) + intval($dad['respostas']['questao9']) + intval($dad['respostas']['questao10']) + intval($dad['respostas']['questao11']) + intval($dad['respostas']['questao12']);
        $dad['pontuacao']['sessao3'] = intval($dad['respostas']['questao13']) + intval($dad['respostas']['questao14']) + intval($dad['respostas']['questao15']) + intval($dad['respostas']['questao16']) + intval($dad['respostas']['questao17']) + intval($dad['respostas']['questao18']);
        $dad['pontuacao']['sessao4'] = intval($dad['respostas']['questao19']) + intval($dad['respostas']['questao20']) + intval($dad['respostas']['questao21']) + intval($dad['respostas']['questao22']) + intval($dad['respostas']['questao23']) + intval($dad['respostas']['questao24']);
        $dad['pontuacao']['sessao5'] = intval($dad['respostas']['questao25']) + intval($dad['respostas']['questao26']) + intval($dad['respostas']['questao27']) + intval($dad['respostas']['questao28']) + intval($dad['respostas']['questao29']) + intval($dad['respostas']['questao30']);
        $dad['pontuacao']['sessao6'] = intval($dad['respostas']['questao31']) + intval($dad['respostas']['questao32']) + intval($dad['respostas']['questao33']) + intval($dad['respostas']['questao34']) + intval($dad['respostas']['questao35']) + intval($dad['respostas']['questao36']);
        $dad['pontuacao']['sessao7'] = intval($dad['respostas']['questao37']) + intval($dad['respostas']['questao38']) + intval($dad['respostas']['questao39']) + intval($dad['respostas']['questao40']) + intval($dad['respostas']['questao41']) + intval($dad['respostas']['questao42']);
        $dad['pontuacao']['sessao8'] = intval($dad['respostas']['questao43']) + intval($dad['respostas']['questao44']) + intval($dad['respostas']['questao45']) + intval($dad['respostas']['questao46']) + intval($dad['respostas']['questao47']) + intval($dad['respostas']['questao48']);
        $dad['pontuacao']['sessao9'] = intval($dad['respostas']['questao49']) + intval($dad['respostas']['questao50']) + intval($dad['respostas']['questao51']) + intval($dad['respostas']['questao52']) + intval($dad['respostas']['questao53']) + intval($dad['respostas']['questao54']);
        $dad['pontuacao']['sessao10'] = intval($dad['respostas']['questao55']) + intval($dad['respostas']['questao56']) + intval($dad['respostas']['questao57']) + intval($dad['respostas']['questao58']) + intval($dad['respostas']['questao59']) + intval($dad['respostas']['questao60']);
        $dad['pontuacao']['sessao11'] = intval($dad['respostas']['questao61']) + intval($dad['respostas']['questao62']) + intval($dad['respostas']['questao63']) + intval($dad['respostas']['questao64']) + intval($dad['respostas']['questao65']) + intval($dad['respostas']['questao66']);
        $dad['pontuacao']['sessao12'] = intval($dad['respostas']['questao67']) + intval($dad['respostas']['questao68']) + intval($dad['respostas']['questao69']) + intval($dad['respostas']['questao70']) + intval($dad['respostas']['questao71']) + intval($dad['respostas']['questao72']);
        $dad['pontuacao']['sessao13'] = intval($dad['respostas']['questao73']) + intval($dad['respostas']['questao74']) + intval($dad['respostas']['questao75']) + intval($dad['respostas']['questao76']) + intval($dad['respostas']['questao77']) + intval($dad['respostas']['questao78']);
        $dad['pontuacao']['sessao14'] = intval($dad['respostas']['questao79']) + intval($dad['respostas']['questao80']) + intval($dad['respostas']['questao81']) + intval($dad['respostas']['questao82']) + intval($dad['respostas']['questao83']) + intval($dad['respostas']['questao84']);

        $dad['pontuacao']['geral'] = intval($dad['pontuacao']['sessao1']) + intval($dad['pontuacao']['sessao2']) + intval($dad['pontuacao']['sessao3']) + intval($dad['pontuacao']['sessao4']) + intval($dad['pontuacao']['sessao5']) + intval($dad['pontuacao']['sessao6']) + intval($dad['pontuacao']['sessao7']) + intval($dad['pontuacao']['sessao8']) + intval($dad['pontuacao']['sessao9']) + intval($dad['pontuacao']['sessao10']) + intval($dad['pontuacao']['sessao11']) + intval($dad['pontuacao']['sessao12']) + intval($dad['pontuacao']['sessao13']) + intval($dad['pontuacao']['sessao14']);
        $dad['pontuacao']['total'] = intval($dad['resultado']['atena']) + intval($dad['resultado']['afrodite']) + intval($dad['resultado']['persefone']) + intval($dad['resultado']['artemis']) + intval($dad['resultado']['demeter']) + intval($dad['resultado']['hera']);

        return json_encode($dad);
    } catch (\Throwable $th) {
        throw $th;
    }
}
