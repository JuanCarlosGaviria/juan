@extends('dashboard.master')
@section('titulo','DetallesIngresos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Litado de Detalle_Ingresos</h1>
    <br>
    <a href="{{url('dashboard/income_detail/create')}}" class="btn btn-primary btn-sm">Nueva Ingreso</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id_Ingreso</th>
                <th>Id_Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($income_detail as $income_detail)
            <tr>
                <td scope="row">{{$income_detail->id}}</td>
                <td>{{$income_detail->income_id}}</td>
                <td>{{$income_detail->article_id}}</td>
                <td>{{$income_detail->quantity}}</td>
                <td>{{$income_detail->price}}</td>
                <td>
                    <a href="{{ url('dashboard/income_detail/'.$income_detail->id.'/edit') }}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/income_detail/'.$income_detail->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit" ></button>                                
                    </form>
                </td>

            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


    </div>

</main>
@endsection