<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SaleResource;
use App\Models\Sale;
use App\Services\Sale\Contracts\iSaleService;
use App\Traits\Crud;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    use Crud;

    public function index()
    {
        $sales = Sale::all();
        return success_response(SaleResource::collection($sales), 'Sales retrieved successfully.');
    }
    public function store(Request $request, iSaleService $saleService)
    {
        $sale = $saleService->cStore($request);
        return success_response(new SaleResource($sale), 'Sale created successfully');
    }

    public function edit($id, iSaleService $saleService)
    {
        $sale = $saleService->cEdit($id);
        return success_response(new SaleResource($sale), 'Sale retrieved successfully');
    }

    public function update(Request $request, $id, iSaleService $saleService)
    {
        $sale = $saleService->cUpdate($request, $id);
        return success_response(new SaleResource($sale), 'Sale updated successfully');
    }

    public function destroy($id, iSaleService $saleService)
    {
        $saleService->cDelete($id);
        return success_response(null, 'Sale deleted successfully');
    }
}
