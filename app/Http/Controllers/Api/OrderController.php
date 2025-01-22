<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Services\Order\Contracts\iOrderService;
use App\Traits\Crud;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use Crud;

    public function store(Request $request, iOrderService $orderService)
    {
        $order = $orderService->cStore($request);
        return success_response(new OrderResource($order), 'Order created successfully');
    }

    public function edit($id, iOrderService $orderService)
    {
        $order = $orderService->cEdit($id);
        return success_response(new OrderResource($order), 'Order retrieved successfully');
    }

    public function update(Request $request, $id, iOrderService $orderService)
    {
        $order = $orderService->cUpdate($request, $id);
        return success_response(new OrderResource($order), 'Order updated successfully');
    }

    public function destroy($id, iOrderService $orderService)
    {
        $orderService->cDelete($id);
        return success_response(null, 'Order deleted successfully');
    }
}
