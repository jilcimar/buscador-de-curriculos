<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';

    protected $fillable = ['titulo','inicio', 'fim', 'cidade' , 'descricao'];

    protected $dates = ['inicio', 'fim'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atividades ()
    {
        return $this->hasMany(Atividade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function habilidades ()
    {
        return $this->hasMany(Habilidade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outrasAtividades ()
    {
        return $this->hasMany(OutrasAtividade::class);
    }


    public function curriculos ()
    {
        return $this->hasMany(Curriculo::class);
    }
}
