<?php

namespace App;
use App\Questoe;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable = [
        'nome', 'ponto'
    ];

    public function questoes()
    {
        return $this->hasMany(Questoe::class);
    }

}
