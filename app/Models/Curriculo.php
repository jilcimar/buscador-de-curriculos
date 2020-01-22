<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{

    protected $table = 'curriculos';

    protected $fillable = ['nome','email','telefone', 'apresentacao', 'linkedin', 'github', 'ingles', 'salario','anexo'];


    const INGLES_MEDIO = 0;

    const INGLES_BASICO = 1;

    const INGLES_AVANCADO = 2;


    const INGLES = [
        self::INGLES_MEDIO => 'Inglês Médio',
        self::INGLES_BASICO => 'Inglês Básico',
        self::INGLES_AVANCADO => 'Inglês Avançado',
    ];

}
