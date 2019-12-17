<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class listProduct
 * @package App\Models
 * @version December 17, 2019, 5:53 pm -03
 *
 * @property string name
 * @property string price
 * @property integer stock
 * @property integer minstock
 * @property string type
 * @property string minPrice
 * @property string maxPrice
 * @property string image
 * @property string description
 */
class listProduct extends Model
{
    // use SoftDeletes;

    public $table = 'list_products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'price',
        'stock',
        'minstock',
        'type',
        'minPrice',
        'maxPrice',
        'image',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'price' => 'string',
        'stock' => 'integer',
        'minstock' => 'integer',
        'type' => 'string',
        'minPrice' => 'string',
        'maxPrice' => 'string',
        'image' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
