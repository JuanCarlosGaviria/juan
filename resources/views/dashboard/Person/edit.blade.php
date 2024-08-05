@extends('dashboard.master')
@section('titulo','Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Persona</h1>
    <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
    @csrf
    @method('PUT')
    <!-- Primer nombre -->
    <div class="form-group row">
        <label for="First_Name" class="col-sm--2 col-form-label">PrimerNombre</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{$person->First_Name}}" placeholder="Ingresa el PrimerNombre de persona">
        </div>
    </div>
    <!-- Segundo nombre -->
    <div class="form-group row">
    <label for="Last_Name" class="col-sm--2 col-form-label">SegundoNombre</label>
    <div class="col-sm-15">
        <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$person->Last_Name}}" placeholder="Ingresa el SegundoNombre de persona">
        </div>
    </div>
    <!-- Tipo -->
    <div class="form-group row">
        <label for="type">tipo</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="1" {{ $person->type == 1 ? 'selected' : '' }}>Persona Natural</option>
                <option value="2" {{ $person->type == 2 ? 'selected' : '' }}>empresa</option>
                <option value="3" {{ $person->type == 3 ? 'selected' : '' }}>provedor</option>
            </select>
        </div>
    </div>
    <!-- -->
    <div class="form-group row">
        <label for="Document_Type">Tipo de documento</label>
        <div class="col-sm-15">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="1" {{ $person->Document_Type == 1 ? 'selected' : '' }}>CC</option>
                <option value="2" {{ $person->Document_Type == 2 ? 'selected' : '' }}>TI</option>
                <option value="3" {{ $person->Document_Type == 3 ? 'selected' : '' }}>Pasaporte</option>
                <option value="4" {{ $person->Document_Type == 4 ? 'selected' : '' }}>Nit</option>
                
            </select>
        </div>
    </div>
    <!-- -->
    <div class="form-group row">
        <label for="Document_Number" class="col-sm--2 col-form-label">Número de Documento</label>
        <div class="col-sm-15">
            <textarea type="number" class="form-control" name="Document_Number" id="Document_Number">{{$person->Document_Number}}</textarea>
        </div>
    </div>
    <!-- -->
    <div class="form-group row">
        <label for="Adress" class="col-sm--2 col-form-label">Direccion</label>
        <div class="col-sm-15">
            <textarea type="text" class="form-control" name="Adress" id="Adress">{{$person->Adress}}</textarea>
        </div>
    </div>
    <!-- -->
    <div class="form-group row">
        <label for="Phone" class="col-sm--2 col-form-label">Telefono</label>
        <div class="col-sm-15">
            <textarea type="number" class="form-control" name="Phone" id="Phone">{{$person->Phone}}</textarea>
        </div>
    </div>
    <!-- -->
    <div class="form-group row">
        <label for="Email" class="col-sm--2 col-form-label">Correo</label>
        <div class="col-sm-15">
            <textarea type="text" class="form-control" name="Email" id="Email">{{$person->Email}}</textarea>
        </div>
    </div>
    <!-- -->
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>  
</div>

@endsection