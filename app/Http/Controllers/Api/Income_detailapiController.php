<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\income_detail;

class Income_detailapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income_details=Income_detail::all();
        return$income_details;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income_detail= new Income_detail();
        $income_detail->income_id=$request->input('income_id');
        $income_detail->article_id=$request->input('article_id');
        $income_detail->quantity=$request->input('quantity');
        $income_detail->price=$request->input('price');
        $income_detail->save();
        return $income_detail;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income_detail=Income_detail::findOrFail($id);
        return response ()->json($income_detail);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income_detail=Income_detail::find($id);
        $income_detail->income_id=$request->input('income_id');
        $income_detail->article_id=$request->input('article_id');
        $income_detail->quantity=$request->input('quantity');
        $income_detail->price=$request->input('price');
        $income_detail->save();
        return $income_detail;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income_detail=Income_detail::find($id);
        $income_detail->delete();
        return('Ingreso_detalle eliminado');
    }
}
