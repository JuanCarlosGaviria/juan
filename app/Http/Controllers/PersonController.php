<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;


class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person=Person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person= new person();
        $person->name=$request->input('name');
        $person->description=$request->input('description');
        $person->state=$request->input('state');
        $person->save();
        return view("dashboard.person.message",['msg'=>"La persona ha sido agregada con Exito"]);

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
    public function edit($id)
    {
        $person=Person::find($id);
        return view('dashboard.person.edit',['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $person=Person::find($id);
        $person->name=$request->input('name');
        $person->description=$request->input('description');
        $person->state=$request->input('state');
        $person->save();
        return view("dashboard.person.message",['msg'=>"La persona ha sido Actualizada con Exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $person=Person::find($id);
        $person->delete();
        return redirect("dashboard/person");

    }
}