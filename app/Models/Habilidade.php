<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habilidade extends Model
{
    protected $table = 'habilidades';

    protected $fillable = ['titulo','vaga_id'];


}
