<?php

namespace App\Services\Sale\Contracts;

use App\Http\Requests\SaleRequest;

interface iSaleService
{
    public function store(SaleRequest $request);
    public function edit($id);
    public function update(SaleRequest $request, $id);
    public function delete($id);
}
