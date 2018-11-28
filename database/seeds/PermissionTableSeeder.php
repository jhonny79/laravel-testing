<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        //Permisos de Usuarios
        Permission::create([

            'name' => 'navegar usuarios',
            'slug' => 'users.index',
            'description' => 'navegar usuarios',
        ]);

        Permission::create([

            'name' => 'Crear usuarios',
            'slug' => 'users.create',
            'description' => 'Crear usuarios',
        ]);

        Permission::create([

            'name' => 'detalle de usuaio',
            'slug' => 'users.show',
            'description' => 'detalle de usuaio',
        ]);

        Permission::create([

            'name' => 'Editar usuarios del sistema',
            'slug' => 'users.edit',
            'description' => 'Editar usuarios del sistema',
        ]);

        Permission::create([

            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar usuario',
        ]);


        //Permisos de Roles
        Permission::create([

            'name' => 'navegar roles',
            'slug' => 'roles.index',
            'description' => 'navegar roles',
        ]);

        Permission::create([

            'name' => 'Crear roles',
            'slug' => 'roles.create',
            'description' => 'Crear roles',
        ]);

        Permission::create([

            'name' => 'detalle de rol',
            'slug' => 'roles.show',
            'description' => 'detalle de rol',
        ]);

        Permission::create([

            'name' => 'Editar roles del sistema',
            'slug' => 'roles.edit',
            'description' => 'Editar roles del sistema',
        ]);

        Permission::create([

            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar rol',
        ]);




        //Permisos de Tickets
        Permission::create([

            'name' => 'navegar tickets',
            'slug' => 'tickets.index',
            'description' => 'navegar tickets',
        ]);

        Permission::create([

            'name' => 'Crear tickets',
            'slug' => 'tickets.create',
            'description' => 'Crear tickets',
        ]);

        Permission::create([

            'name' => 'detalle de ticket',
            'slug' => 'tickets.show',
            'description' => 'detalle de ticket',
        ]);

        Permission::create([

            'name' => 'Editar tickets del sistema',
            'slug' => 'tickets.edit',
            'description' => 'Editar tickets del sistema',
        ]);

        Permission::create([

            'name' => 'Eliminar ticket',
            'slug' => 'tickets.destroy',
            'description' => 'Eliminar ticket',
        ]);
    }
}
