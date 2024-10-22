<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    // Campos permitidos para inserção em massa
    protected $fillable = [
        'nome',
        'cpf',
        'email', // Certifique-se de que o campo 'email' está aqui
        'dia_atual',
        'horario',
        'solicitante',
    ];
}
