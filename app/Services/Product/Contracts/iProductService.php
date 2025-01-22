<?php

namespace App\Services\Product\Contracts;

use App\Http\Requests\ProductRequest;

interface iProductService
{
    public function store(ProductRequest $request);
    public function edit($id);
    public function update(ProductRequest $request, $id);
    public function delete($id);
}
