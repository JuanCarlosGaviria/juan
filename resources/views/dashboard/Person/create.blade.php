@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4 col-sm-3">
    <form action="{{ route('person.store') }}" method="post">
    @csrf
    <!-- Primer nombre -->
    <div class="form-group row">
        <label for="First_Name" class="col-sm--2 col-form-label">PrimerNombre</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Ingresa el PrimerNombre de persona">
        </div>
    </div>
    <!-- Segundo nombre -->
    <div class="form-group row">
        <label for="Last_Name" class="col-sm--2 col-form-label">SegundoNombre</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingresa el SegundoNombre de persona">
        </div>
    </div>
    <!-- Tipo -->
    <div class="form-group row">
        <label for="type">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="1">personanatural</option>
                <option value="2">empresa</option>
                <option value="3">provedor</option>
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="Document_Type">Tipo de documento</label>
        <div class="col-sm-15">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="1">CC</option>
                <option value="2">TI</option>
                <option value="3">Pasaporte</option>
                <option value="4">Nit</option>
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="Document_Number" class="col-sm--2 col-form-label">Número de Documento</label>
        <div class="col-sm-15">
            <input type="number" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingresa el Número de Documento">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="Adress" class="col-sm--2 col-form-label">Direccion</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Ingresa Direccion de persona">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="Phone" class="col-sm--2 col-form-label">Telefono</label>
        <div class="col-sm-15">
            <input type="number" class="form-control" name="Phone" id="Phone" placeholder="Ingresa Telefono de persona">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="Email" class="col-sm--2 col-form-label">Correo</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Ingresa Correo de persona">
        </div>
    </div>
    <!--  -->
    <div class="form-group row" style="margin-top: 50px;">
        <div class="col-sm-15 offset-sm-3">
        <button type="submit" class="btn btn-success">Registrar</button>
        <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>  
</div>

@endsection
