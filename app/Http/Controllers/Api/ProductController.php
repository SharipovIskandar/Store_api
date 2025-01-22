<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Services\Product\Contracts\iProductService;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    protected iProductService $productService;

    public function __construct(iProductService $productService)
    {
        $this->productService = $productService;
    }

    public function store(ProductRequest $request)
    {
        $product = $this->productService->store($request);
        return success_response(new ProductResource($product), 'Product created successfully');
    }

    public function edit($id)
    {
        $product = $this->productService->edit($id);
        return success_response(new ProductResource($product), 'Product fetched successfully');
    }

    public function update(ProductRequest $request, $id)
    {
        $product = $this->productService->update($request, $id);
        return success_response(new ProductResource($product), 'Product updated successfully');
    }

    public function delete($id)
    {
        $this->productService->delete($id);
        return success_response(null, 'Product deleted successfully');
    }
}
