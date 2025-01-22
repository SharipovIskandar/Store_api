<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StockResource;
use App\Services\Stock\Contracts\iStockService;
use App\Traits\Crud;
use Illuminate\Http\Request;

class StockController extends Controller
{
    use Crud;

    public function store(Request $request, iStockService $stockService)
    {
        $stock = $stockService->cStore($request);
        return success_response(new StockResource($stock), 'Stock created successfully');
    }

    public function edit($id, iStockService $stockService)
    {
        $stock = $stockService->cEdit($id);
        return success_response(new StockResource($stock), 'Stock retrieved successfully');
    }

    public function update(Request $request, $id, iStockService $stockService)
    {
        $stock = $stockService->cUpdate($request, $id);
        return success_response(new StockResource($stock), 'Stock updated successfully');
    }

    public function destroy($id, iStockService $stockService)
    {
        $stockService->cDelete($id);
        return success_response(null, 'Stock deleted successfully');
    }
}
