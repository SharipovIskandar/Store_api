<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Services\Product\Contracts\iProductService;
use App\Traits\Crud;
use App\Http\Requests\ProductRequest;

class ProductService implements iProductService
{
    use Crud;

    protected string $modelClass = Product::class;

    public function store(ProductRequest $request)
    {
        return $this->cStore($request);
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(ProductRequest $request, $id)
    {
        return $this->cUpdate($request, $id);
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }
}
