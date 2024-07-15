<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\income_detail;
use App\Models\income;
use App\Models\Article;

class Income_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income_detail=Income_detail::all();
        return view('dashboard.income_detail.index',['income_detail'=>$income_detail]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $income=Income::all();
        $article=Article::all();
        return view('dashboard.income_detail.create',['income'=>$income],['article'=>$article]);
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
        return view("dashboard.income_detail.message",['msg'=>"Detalle_ingreso agregado con Exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income_detail=Income_detail::find($id);
        return view('dashboard.income_detail.edit',['income_detail'=>$income_detail]);
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
        return view("dashboard.income_detail.message",['msg'=>"Detalle_ingreso Actualizado con Exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income_detail=Income_detail::find($id);
        $income_detail->delete();
        return redirect("dashboard/income_detail");
    }
}
