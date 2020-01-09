<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $table = 'produtos';
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'valor',
    ];

}
