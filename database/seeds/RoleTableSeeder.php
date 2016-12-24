<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'student',
                'display_name' => 'Student Club',
                'description' => 'Issuer of a proposal. Part of Student Body'
            ],
            [
                'name' => 'advisor',
                'display_name' => 'Club Advisor',
                'description' => 'A lecturer in charge of supervising the activities of a student club'
            ],
            [
                'name' => 'council',
                'display_name' => 'Student Council',
                'description' => 'Reviews the proposal as written by the students'
            ],
            [
                'name' => 'facilities_a',
                'display_name' => 'Facilities Manager',
                'description' => 'A position held by the manager of the Facilites/Service Desk'
            ],
            [
                'name' => 'facilities_b',
                'display_name' => 'Facilities Safety and Health Officer',
                'description' => 'Facilities officer in charge of OSHA aspect of any events'
            ],
            [
                'name' => 'its',
                'display_name' => 'ITS',
                'description' => 'Information Technology Services - provides IT service for students and staff'
            ],
            [
                'name' => 'sea_a',
                'display_name' => 'Student Experience and Activities Assistant',
                'description' => 'Assists students with enquiries on activities and venue booking'
            ],
            [
                'name' => 'sea_b',
                'display_name' => 'Student Experience and Activities Manager',
                'description' => 'SEA Officer in charge of making final decisions on the approval of events'
            ],
            [
                'name' => 'registrar',
                'display_name' => 'Student Operation',
                'description' => 'The Registrar'
            ],
            [
                'name' => 'finance',
                'display_name' => 'Finance',
                'description' => 'Finance department approves/disapproves the event proposal by the requested funds'
            ],
            [
                'name' => 'execgroup',
                'display_name' => 'Executive Group',
                'description' => 'Executive Group is involved when third party comes into play'
            ],
        ]);
    }
}
