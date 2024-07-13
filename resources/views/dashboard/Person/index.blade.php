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
                <th>Id</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>N.Documento</th>
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
                
                @if (!in_array($person->type, ['Personanatural', 'empresa', 'Provedor']))
    <td>{{$person->type}}</td>
@endif

@if (in_array($person->type, ['Personanatural', 'empresa', 'Provedor']))
    <td>
        {{
        $person->type == 'Personanatural' ? __('Personanatural') :
        ($person->type == 'empresa' ? __('empresa') :
        ($person->type == 'Provedor' ? __('Provedor') : ''))
        }}
    </td>
@endif
                <td>{{$person->First_Name}}
                    {{$person->Last_Name}}</td> 
                    @if (!in_array($person->Document_Type, ['CC', 'TI', 'Pasaporte', 'Nit']))
                    <td>{{$person->Document_Type}}</td>
                @endif
                
                @if (in_array($person->Document_Type, ['CC', 'TI', 'Pasaporte', 'Nit']))
                    <td>
                        {{
                        $person->Document_Type == 'CC' ? __('CC') :
                        ($person->Document_Type == 'TI' ? __('TI') :
                        ($person->Document_Type == 'Pasaporte' ? __('Pasaporte') :
                        ($person->Document_Type == 'Nit' ? __('Nit') : '')))
                        }}
                    </td>
                @endif
                <td>{{$person->Document_Number}}</td>
                <td>{{$person->Adress}}</td>
                <td>{{$person->Phone}}</td>
                <td>{{$person->Email}}</td>
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