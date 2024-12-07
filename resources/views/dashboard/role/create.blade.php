<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Nombre del Rol:</label>
            <div>
                <input type="text" name="name" id="name">
            </div>
        </div>
    <div>
            <label class="text-white" for="permissions">Permisos del Rol:</label>
            <div>
                <table>
                    <tbody>
                        @foreach ($permission as $id => $permission)
                            <tr>
                                <td class="text-white">
                                    <input  type="checkbox" name="permission[]" value="{{ $id }}">
                                    {{ $permission }}
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
        
        <div>
            <button class="text-white" type="submit">Guardar</button>
            <a class="text-white" href="{{ url('role') }}">Cancelar</a>
        </div>
    </div>
    </form>
</x-app-layout>