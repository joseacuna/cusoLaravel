<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= "categories";

    protected $fillable=['name'];// filable sirve para saber que objetos trae el json

    public function articles(){
        return $this->hasMany('App\Articles');
    }


}
