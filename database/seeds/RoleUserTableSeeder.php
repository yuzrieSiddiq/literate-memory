<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            [
                'user_id' => User::where('username', 'SJLC')->first()->id,
                'role_id' => Role::where('name', 'student')->first()->id
            ],
            [
                'user_id' => User::where('username', 'CHUAHS')->first()->id,
                'role_id' => Role::where('name', 'advisor')->first()->id
            ],
            [
                'user_id' => User::where('username', 'SSSC_YKH')->first()->id,
                'role_id' => Role::where('name', 'council')->first()->id
            ],
            [
                'user_id' => User::where('username', 'FAC_1')->first()->id,
                'role_id' => Role::where('name', 'facilities_a')->first()->id
            ],
            [
                'user_id' => User::where('username', 'FAC_2')->first()->id,
                'role_id' => Role::where('name', 'facilities_b')->first()->id
            ],
            [
                'user_id' => User::where('username', 'ITS_1')->first()->id,
                'role_id' => Role::where('name', 'its')->first()->id
            ],
            [
                'user_id' => User::where('username', 'SEA_1')->first()->id,
                'role_id' => Role::where('name', 'sea_a')->first()->id
            ],
            [
                'user_id' => User::where('username', 'SEA_2')->first()->id,
                'role_id' => Role::where('name', 'sea_b')->first()->id
            ],
            [
                'user_id' => User::where('username', 'REG_1')->first()->id,
                'role_id' => Role::where('name', 'registrar')->first()->id
            ],
            [
                'user_id' => User::where('username', 'FIN_1')->first()->id,
                'role_id' => Role::where('name', 'finance')->first()->id
            ],
            [
                'user_id' => User::where('username', 'EXECGROUP')->first()->id,
                'role_id' => Role::where('name', 'execgroup')->first()->id
            ],
        ]);
    }
}
