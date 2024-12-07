<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importamos de spati
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            'Ver-Article',
            'Crear-Article',
            'Editar-Article',
            'Eliminar-Article',
            //table category
            'Ver-categoria',
            'Crear-categoria',
            'Editar-categoria',
            'Eliminar-categoria',
            //table Incomedetail 
            'Ver-ingresoDetalle',
            'Crear-ingresoDetalle',
            'Editar-ingresoDetalle',
            'Eliminar-ingresoDetalle',
            //table Income 
            'Ver-ingreso',
            'Crear-ingreso',
            'Editar-ingreso',
            'Eliminar-ingreso',
            //table Person 
            'Ver-Persona',
            'Crear-Persona',
            'Editar-Persona',
            'Eliminar-Persona',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso ]);
        }
    }
}
