<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use QCod\ImageUp\HasImageUploads;

class Curriculo extends Model
{
    use HasImageUploads;

    protected $table = 'curriculos';

    protected $fillable = ['nome','email','telefone', 'apresentacao', 'linkedin', 'github', 'ingles', 'salario','anexo','vaga_id'];

    protected static $fileFields = [
        'anexo' => [
            'rules' => 'file',
            'auto_upload' => false,
        ],
    ];

    const INGLES_MEDIO = 0;

    const INGLES_BASICO = 1;

    const INGLES_AVANCADO = 2;


    const INGLES = [
        self::INGLES_MEDIO => 'Inglês Médio',
        self::INGLES_BASICO => 'Inglês Básico',
        self::INGLES_AVANCADO => 'Inglês Avançado',
    ];

    public function vaga()
    {
        return $this->belongsTo(Vaga::class);
    }



}
