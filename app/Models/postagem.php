<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class postagem extends Model
{
    use HasFactory;
    use softDeletes;


    protected $table = 'postagens';
    protected $fillable = ['titulo' , 'subtitulo' , 'texto' , 'imagem' , 'vizualizacoes'];

}
