@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Litado de Personas</h1>
    <br>
    <a href="{{url('dashboard/person/create')}}" class="btn btn-primary btn-sm">Nueva Persona</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id Persona</th>
                <th>Tipo</th>
                <th>Primer-Nombre</th>
                <th>Segundo-Nombre</th>
                <th>Tipo-De-Documento</th>
                <th>Numerodedocumento</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $person)
            <tr>
                <td scope="row">{{$person->id}}</td>
                <td>{{$person->type}}</td>
                <td>
                    {{
                    $person->type == 'CC' ? __('CC') :
                    ($person->type == 'TI' ? __('TI') :
                    ($person->type == 'Pasaporte' ? __('Pasaporte') :
                    ($person->type == 'Nit' ? __('Nit') : __('Desconocido'))))
                    }}
                </td>
                <td>{{$person->First_Name}}</td>
                <td>{{$person->Last_Name}}</td>
                <td>{{$person->Document_Type}}</td>
                <td>
                    {{
                    $person->Document_Type == 'CC' ? __('CC') :
                    ($person->Document_Type == 'TI' ? __('TI') :
                    ($person->Document_Type == 'Pasaporte' ? __('Pasaporte') :
                    ($person->Document_Type == 'Nit' ? __('Nit') : __('Desconocido'))))
                    }}
                </td>
                <td>{{$person->category->name}}</td>
                <td>{{$person->created_at}}</td>
                <td>{{$person->updated_at}}</td>
                <td>
                    <a href="{{ url('dashboard/person/'.$person->id.'/edit') }}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
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