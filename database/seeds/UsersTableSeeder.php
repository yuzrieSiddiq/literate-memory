<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                // 1. CLUB
                'name' => "Swinburne Japanese Language Club",
                'email' => "SJLC@email.com",
                'username' => "SJLC",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 2. CLUB ADVISOR
                'name' => "Chua Hong Siang",
                'email' => "CHUAHS@email.com",
                'username' => "CHUAHS",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 3. SSSC
                'name' => "Yong Kian Hui",
                'email' => "YKH@email.com",
                'username' => "SSSC_YKH",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 4A. FACILITIES
                'name' => "Daniel Wong Ka Kui",
                'email' => "DWKK@email.com",
                'username' => "FAC_1",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 4B. FACILITIES
                'name' => "Siti Nusantara",
                'email' => "SINUS@email.com",
                'username' => "FAC_2",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                // 5. ITS
                'name' => "Ridhwan Yousef",
                'email' => "RIYO@email.com",
                'username' => "ITS_1",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 6A. SEA ASSISTANT
                'name' => "Leandra Sagah",
                'email' => "LEANDRA@email.com",
                'username' => "SEA_1",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 6B. SEA MANAGER
                'name' => "Hisyam",
                'email' => "HISYAM@email.com",
                'username' => "SEA_2",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 7. REGISTRAR
                'name' => "Adrian Aleen",
                'email' => "ADALE@email.com",
                'username' => "REG_1",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                // 8. FINANCE
                'name' => "Fintu Syurga",
                'email' => "FINSY@email.com",
                'username' => "FIN_1",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 9. Executive Group
                'name' => "Gabriel Ting",
                'email' => "GBTING@email.com",
                'username' => "EXECGROUP",
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
