<?php

namespace App\Services\Order;

use App\Models\Order;
use App\Services\Order\Contracts\iOrderService;
use App\Traits\Crud;
use App\Http\Requests\OrderRequest;

class OrderService implements iOrderService
{
    use Crud;

    protected string $modelClass = Order::class;

    public function store(OrderRequest $request)
    {
        return $this->cStore($request);
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(OrderRequest $request, $id)
    {
        return $this->cUpdate($request, $id);
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }
}
