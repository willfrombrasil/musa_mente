<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {
            $table->id();
            $table->string('chave')->unique();
            $table->string('protocolo')->unique();
            $table->string('nome');
            $table->string('email');
            $table->string('fone')->nullable();
            $table->string('data');
            $table->string('atena');
            $table->string('afrodite');
            $table->string('persefone');
            $table->string('artemis');
            $table->string('demeter');
            $table->string('hera');
            $table->longText('teste')->nullable();
            $table->integer('sent_mail')->default(0);
            $table->integer('sent_mail_mkt')->default(0);
            $table->integer('deletado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testes');
    }
}
