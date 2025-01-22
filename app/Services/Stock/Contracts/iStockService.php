<?php

namespace App\Services\Stock\Contracts;

use App\Http\Requests\StockRequest;

interface iStockService
{
    public function store(StockRequest $request);
    public function edit($id);
    public function update(StockRequest $request, $id);
    public function delete($id);
}
