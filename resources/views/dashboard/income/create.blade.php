@extends('dashboard.master')
@section('titulo','NuevoIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{ route('income.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="provider_id" class="col-sm-2 col-form-label">Id_proveedor</label>
        <div class="col-sm-10">
            <select name="provider_id" id="provider_id" class="form-select" required >
                <option value="">Seleccionar_Proveedor</option>
                @foreach($person as $person)
                <option value="{{$person->id}}">{{$person->type}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="user_id" class="col-sm-2 col-form-label">Id_usuario</label>
        <div class="col-sm-10">
            <select name="user_id" id="user_id" class="form-select" required >
                <option value="">Seleccionar_Usuario</option>
                @foreach($User as $User)
                <option value="{{$User->id}}">{{$User->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="receipt_type" class="col-sm-2 col-form-label">Tipo_recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el Tipo_recibo">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="receipt_series" class="col-sm-2 col-form-label">Serie_recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa el Serie_recibo">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="receipt_number" class="col-sm-2 col-form-label">Número_recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el Número_recibo">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="date" id="date" placeholder="Ingresa el Fecha">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="tax" id="tax" placeholder="Ingresa el Impuesto">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="total" class="col-sm-2 col-form-label">total</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="total" id="total" placeholder="Ingresa el Total">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">Estado</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="status" id="status" placeholder="Ingresa el Estado">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-success">Registrar</button>
        <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>  
</div>

@endsection