<?php

namespace App\Repositories;

use App\Models\listProduct;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class listProductRepository
 * @package App\Repositories
 * @version December 17, 2019, 5:53 pm -03
 *
 * @method listProduct findWithoutFail($id, $columns = ['*'])
 * @method listProduct find($id, $columns = ['*'])
 * @method listProduct first($columns = ['*'])
*/
class listProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return listProduct::class;
    }
}
