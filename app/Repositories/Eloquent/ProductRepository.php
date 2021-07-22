<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\ProductRepositoryInterface;
//$p = app()->make(App\Repositories\Contracts\ProductRepositoryInterface::class)
// $s = $p->search('Gr')->take(2)->get(['name','code'])
use App\Models\Product;

/** @property Product $model */
class ProductRepository extends Repository implements ProductRepositoryInterface
{
    protected $searchs = ['name', 'code', 'description'];

    protected function model()
    {
        return Product::class;
    }
}
