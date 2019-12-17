<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
            'nombre'
    ];

    public function productos()
    {
        return $this->belongsToMany('App\Product');
    }

     public function categoria()
    {
        return $this->belongsToMany('App\Categories');
    }
}
