<?php

namespace App\Services\Income;

use App\Models\Income;
use App\Services\Income\Contracts\iIncomeService;
use App\Traits\Crud;
use Illuminate\Http\Request;

class IncomeService implements iIncomeService
{
    use Crud;

    protected string $modelClass = Income::class;

    public function store(Request $request)
    {
        return $this->cStore($request);
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->cUpdate($request, $id);
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }
}
