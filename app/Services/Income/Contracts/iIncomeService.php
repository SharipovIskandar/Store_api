<?php

namespace App\Services\Income\Contracts;

use App\Http\Requests\IncomeRequest;

interface iIncomeService
{
    public function store(IncomeRequest $request);
    public function edit($id);
    public function update(IncomeRequest $request, $id);
    public function delete($id);
}
