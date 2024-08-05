<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\income;

class IncomeapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes=Income::all();
        return$incomes;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income= new income();
        $income->provider_id=$request->input('provider_id');
        $income->user_id=$request->input('user_id');
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->save();
        return $income;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income=Income::findOrFail($id);
        return response ()->json($income);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income=income::find($id);
        $income->provider_id=$request->input('provider_id');
        $income->user_id=$request->input('user_id');
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->save();
        return $income;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income=Income::find($id);
        $income->delete();
        return('Ingreso eliminado');
    }
}
