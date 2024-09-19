<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use  HasFactory;


    protected $fillable = [
        'nome',
        'quantidade',
        'categoria_id',
        'sexo',
        'status',
        'preco_pago',
        'preco_vendido',
        'tipo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}