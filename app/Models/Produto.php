<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = [
        'produto',
        'preco_custo',
        'preco_venda',
        'quantidade',
        'quantidade_minima',
        'data_validade',
    ];
}
