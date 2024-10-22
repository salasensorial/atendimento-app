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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->text('nome')->notNullable();
            $table->text('cpf')->notNullable();
            $table->string('email')->notNullable(); // Verifique se o campo email está definido como notNullable
            $table->date('dia_atual')->notNullable();
            $table->time('horario')->notNullable();
            $table->text('solicitante')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
