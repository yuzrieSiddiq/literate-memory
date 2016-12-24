<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            // User with Normal Permissions
            // Item
            // [
            //     'role_id'       => Role::where('name', 'Normal')->first()->id,
            //     'permission_id' => Permission::where('name', 'item-list')->first()->id,
            // ],
            // [
            //     'role_id'       => Role::where('name', 'Normal')->first()->id,
            //     'permission_id' => Permission::where('name', 'item-create')->first()->id,
            // ],
            // [
            //     'role_id'       => Role::where('name', 'Normal')->first()->id,
            //     'permission_id' => Permission::where('name', 'item-edit')->first()->id,
            // ],
            // [
            //     'role_id'       => Role::where('name', 'Normal')->first()->id,
            //     'permission_id' => Permission::where('name', 'item-delete')->first()->id,
            // ],
        ]);
    }
}
