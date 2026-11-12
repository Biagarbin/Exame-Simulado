<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =[
        'nome',
        'qtd_estoque',
        'qtd_minima',
        'categoria_id',
    ];
  
    public function categorias (){
        return $this->belongsTo(Categoria::class);
    }
}
