@extends('dashboard.master')
@section('titulo','NuevoDetalle_Ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Detalle_Ingreso</h1>
    <form action="{{ url('dashboard/income_detail/'.$income_detail->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="income_id" class="col-sm-2 col-form-label">Id_Ingreso</label>
        <div class="col-sm-10">
            <select name="income_id" id="income_id" class="form-select" required >
                <option value="3"></option>
                
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="article_id" class="col-sm-2 col-form-label">Id_Articulo</label>
        <div class="col-sm-10">
            <select name="article_id" id="article_id" class="form-select" required >
                <option value="1"></option>

            </select>
        </div>
    </div>
    <!-- Primer nombre -->
    <div class="form-group row">
        <label for="quantity" class="col-sm--2 col-form-label">Cantidad</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="quantity" id="quantity" value="{{$income_detail->quantity}}" placeholder="Ingresa el Tipo_recibo de ingreso">
        </div>
    </div>
    <!-- Primer nombre -->
    <div class="form-group row">
        <label for="price" class="col-sm--2 col-form-label">Precio</label>
        <div class="col-sm-15">
            <input type="text" class="form-control" name="price" id="price" value="{{$income_detail->price}}" placeholder="Ingresa el Serie_recibo de ingreso">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{url('dashboard/income_detail')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>  
</div>

@endsection