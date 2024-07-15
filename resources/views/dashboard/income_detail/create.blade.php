@extends('dashboard.master')
@section('titulo','NuevoDetalle_ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{ route('income_detail.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="income_id" class="col-sm-2 col-form-label">Id_Ingreso</label>
        <div class="col-sm-10">
            <select name="income_id" id="income_id" class="form-select" required >
                <option value="">Seleccionar_ID ingreso</option>
                @foreach($income as $income)
                <option value="{{$income->id}}">{{$income->id}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="article_id" class="col-sm-2 col-form-label">Id_Articulo</label>
        <div class="col-sm-10">
            <select name="article_id" id="article_id" class="form-select" required >
                <option value="">Seleccionar_ID articulo</option>
                @foreach($article as $article)
                <option value="{{$article->id}}">{{$article->id}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="quantity" class="col-sm-2 col-form-label">Cantidad</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Ingresa la Cantidad">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="price" id="price" placeholder="Ingresa el Precio">
        </div>
    </div>
    <!--  -->
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-success">Registrar</button>
        <a href="{{url('dashboard/income_detail')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>  
</div>

@endsection