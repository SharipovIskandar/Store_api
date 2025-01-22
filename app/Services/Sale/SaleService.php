<?php

namespace App\Services\Sale;

use App\Http\Requests\SaleRequest;
use App\Models\Sale;
use App\Services\Sale\Contracts\iSaleService;
use App\Traits\Crud;

class SaleService implements iSaleService
{

    use Crud;

    protected string $modelClass = Sale::class;

    public function store(SaleRequest $request)
    {
        return $this->cStore($request);
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(SaleRequest $request, $id)
    {
        return $this->cUpdate($request, $id);
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }
}
