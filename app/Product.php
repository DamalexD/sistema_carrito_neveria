<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Laravel\Scout\Searchable;

class Product extends Model
{
    //
    //use Searchable;
    
    protected $fillable = [
            'titulo','descripcion','condicion','precio','oferta'
        ];
    
    public function marca()
    {
        return $this->belongsToMany('App\Brand');
    }

    public function imagenes()
    {
        return $this->hasMany('App\Image');
    }
}
