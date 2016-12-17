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
                'role' => "club",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 2. CLUB ADVISOR
                'name' => "Chua Hong Siang",
                'email' => "CHUAHS@email.com",
                'username' => "CHUAHS",
                'password' => bcrypt('123456'),
                'role' => "advisor",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 3. SSSC
                'name' => "Yong Kian Hui",
                'email' => "YKH@email.com",
                'username' => "SSSC_YKH",
                'password' => bcrypt('123456'),
                'role' => "sssc",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 4A. FACILITIES
                'name' => "Daniel Wong Ka Kui",
                'email' => "DWKK@email.com",
                'username' => "FAC_DWKK",
                'password' => bcrypt('123456'),
                'role' => "facilities_manager",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 4B. FACILITIES
                'name' => "Siti Nusantara",
                'email' => "SINUS@email.com",
                'username' => "FAC_SINUS",
                'password' => bcrypt('123456'),
                'role' => "facilities_osha",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                // 5. ITS
                'name' => "Ridhwan Yousef",
                'email' => "RIYO@email.com",
                'username' => "ITS_RIYO",
                'password' => bcrypt('123456'),
                'role' => "its",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 6A. SEA ASSISTANT
                'name' => "Leandra Sagah",
                'email' => "LEANDRA@email.com",
                'username' => "SEA_LEANDRA",
                'password' => bcrypt('123456'),
                'role' => "seaassistant",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 6B. SEA MANAGER
                'name' => "Hisyam",
                'email' => "HISYAM@email.com",
                'username' => "SEA_HISYAM",
                'password' => bcrypt('123456'),
                'role' => "seamanager",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 7. REGISTRAR
                'name' => "Adrian Aleen",
                'email' => "ADALE@email.com",
                'username' => "REG_ADALE",
                'password' => bcrypt('123456'),
                'role' => "registrar",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                // 8. FINANCE
                'name' => "Fintu Syurga",
                'email' => "FINSY@email.com",
                'username' => "FINSY",
                'password' => bcrypt('123456'),
                'role' => "finance",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 9. Executive Group
                'name' => "Gabriel Ting",
                'email' => "GBTING@email.com",
                'username' => "EG_GBTING",
                'password' => bcrypt('123456'),
                'role' => "execgroup",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                // 10. Super User
                'name' => "Peter Wong",
                'email' => "PWONG@email.com",
                'username' => "SU_PWONG",
                'password' => bcrypt('123456'),
                'role' => "superuser",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
