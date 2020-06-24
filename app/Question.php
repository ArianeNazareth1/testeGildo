<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   
    protected $fillable = [
        'enunciado', 'resposta','correta','valorquestao'
    ];
}
