<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;

    protected $table = 'testes';

    protected $fillable = [
        'chave',
        'protocolo',
        'nome',
        'email',
        'fone',
        'data',
        'atena',
        'afrodite',
        'persefone',
        'artemis',
        'demeter',
        'hera',
        'teste',
        'sent_mai',
        'sent_mail_mkt',
        'deletado'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
