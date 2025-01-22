<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IncomeResource;
use App\Models\Income;
use App\Services\Income\Contracts\iIncomeService;
use App\Traits\Crud;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    use Crud;

    public function index()
    {
        $incomes = Income::all();
        return success_response(IncomeResource::collection($incomes), 'Incomes retrieved successfully.');
    }
    public function store(Request $request, iIncomeService $incomeService)
    {
        $income = $incomeService->cStore($request);
        return success_response(new IncomeResource($income), 'Income created successfully');
    }

    public function edit($id, iIncomeService $incomeService)
    {
        $income = $incomeService->cEdit($id);
        return success_response(new IncomeResource($income), 'Income retrieved successfully');
    }

    public function update(Request $request, $id, iIncomeService $incomeService)
    {
        $income = $incomeService->cUpdate($request, $id);
        return success_response(new IncomeResource($income), 'Income updated successfully');
    }

    public function destroy($id, iIncomeService $incomeService)
    {
        $incomeService->cDelete($id);
        return success_response(null, 'Income deleted successfully');
    }
}
