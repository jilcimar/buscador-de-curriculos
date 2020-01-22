<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutrasAtividade extends Model
{
    protected $table = 'outras_atividades';

    protected $fillable = ['titulo','vaga_id'];
}
