<?php

namespace App\Services\Stock;

use App\Http\Requests\StockRequest;
use App\Models\Stock;
use App\Traits\Crud;

class StockService
{
    use Crud;

    protected string $modelClass = Stock::class;

    public function store(StockRequest $request)
    {
        return $this->cStore($request);
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(StockRequest $request, $id)
    {
        return $this->cUpdate($request, $id);
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }
}
