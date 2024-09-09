<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->
            onDelete('cascade');  // Relaciona a inscrição ao usuário
            $table->foreignId('vaga_id')->constrained('vagas')->
            onDelete('cascade');  // Relaciona a inscrição à vaga
            $table->string('status')->default('pendente');
            $table->timestamps();
        });
    }


  public function down(): void
    {
        Schema::dropIfExists('inscricaos');
    }
};
