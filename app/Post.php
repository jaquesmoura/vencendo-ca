<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $titulo;
    protected $texto;
    protected $foto;

    public function __construct($titulo, $texto, $foto)
    {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->foto = $foto;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getFoto(){
        return $this->foto;
    }
}
