<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Questoe extends Model
{
    protected $fillable = [
        'enunciadoum', 'questaoum','enunciadodois', 'questaodois','enunciadodois', 'questaodois','enunciadotres', 'questaotres','enunciadoquatro', 'questaoquatro','enunciadocinco', 'questaocinco','enunciadoseis', 'questaoseis','enunciadosete', 'questaosete','correta','valorquestao'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
