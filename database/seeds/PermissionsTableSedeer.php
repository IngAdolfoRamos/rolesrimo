<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Permissions for users */
        //See all users
        Permission::create
        ([
           'name'           => 'Navegar usuarios',
           'slug'           => 'users.index',
           'description'    => 'Lista y navega todos los usuarios del sistema'
        ]);
        //See users details
        Permission::create
        ([
           'name'           => 'Ver detalle de usuario',
           'slug'           => 'users.show',
           'description'    => 'Ver en detalle cada usuario del sistema'
        ]);
        //Edit users
        Permission::create
        ([
           'name'           => 'Edicion de usuarios',
           'slug'           => 'users.edit',
           'description'    => 'Editar cualquier dato de un usuario del sistema'
        ]);
        //Delete users
        Permission::create
        ([
           'name'           => 'Eliminar usuario',
           'slug'           => 'users.destroy',
           'description'    => 'Elimina cualquier usuario del sistema'
        ]);

        /* Permissions for roles */
        //See all roles
        Permission::create
        ([
            'name'           => 'Navegar roles',
            'slug'           => 'roles.index',
            'description'    => 'Lista y navega todos los roles del sistema'
        ]);
        //See roles details
        Permission::create
        ([
            'name'           => 'Ver detalle de rol',
            'slug'           => 'roles.show',
            'description'    => 'Ver en detalle cada rol del sistema'
        ]);
        //Create roles
        Permission::create
        ([
            'name'           => 'Creacion de roles',
            'slug'           => 'roles.create',
            'description'    => 'Editar cualquier dato de un rol del sistema'
        ]);
        //Edit roles
        Permission::create
        ([
            'name'           => 'Edicion de roles',
            'slug'           => 'roles.edit',
            'description'    => 'Editar cualquier dato de un rol del sistema'
        ]);
        //Delete roles
        Permission::create
        ([
            'name'           => 'Eliminar roles',
            'slug'           => 'roles.destroy',
            'description'    => 'Elimina cualquier rol del sistema'
        ]);

        /* Permissions for products */
        //See all products
        Permission::create
        ([
            'name'           => 'Navegar productos',
            'slug'           => 'products.index',
            'description'    => 'Lista y navega todos los productos del sistema'
        ]);
        //See products details
        Permission::create
        ([
            'name'           => 'Ver detalle de producto',
            'slug'           => 'products.show',
            'description'    => 'Ver en detalle cada producto del sistema'
        ]);
        //Create products
        Permission::create
        ([
            'name'           => 'Creacion de productos',
            'slug'           => 'products.create',
            'description'    => 'Editar cualquier dato de un producto del sistema'
        ]);
        //Edit products
        Permission::create
        ([
            'name'           => 'Edicion de productos',
            'slug'           => 'products.edit',
            'description'    => 'Editar cualquier dato de un producto del sistema'
        ]);
        //Delete products
        Permission::create
        ([
            'name'           => 'Eliminar productos',
            'slug'           => 'products.destroy',
            'description'    => 'Elimina cualquier producto del sistema'
        ]);
    }
}
