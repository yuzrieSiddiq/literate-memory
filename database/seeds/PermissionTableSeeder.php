<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            // [
            //     'name' => 'Student',
            //     'display_name' => 'Student Club',
            //     'description' => 'Issuer of a proposal. Part of Student Body'
            // ],
            // [
            //     'name' => 'Advisor',
            //     'display_name' => 'Club Advisor',
            //     'description' => 'A lecturer in charge of supervising the activities of a student club'
            // ],
            // [
            //     'name' => 'Council',
            //     'display_name' => 'Student Council',
            //     'description' => 'Reviews the proposal as written by the students'
            // ],
            // [
            //     'name' => 'Facilities_A',
            //     'display_name' => 'Facilities Manager',
            //     'description' => 'A position held by the manager of the Facilites/Service Desk'
            // ],
            // [
            //     'name' => 'Facilities_B',
            //     'display_name' => 'Facilities Safety and Health Officer',
            //     'description' => 'Facilities officer in charge of OSHA aspect of any events'
            // ],
            // [
            //     'name' => 'Its',
            //     'display_name' => 'ITS',
            //     'description' => 'Information Technology Services - provides IT service for students and staff'
            // ],
            // [
            //     'name' => 'SEA_A',
            //     'display_name' => 'Student Experience and Activities Assistant',
            //     'description' => 'Assists students with enquiries on activities and venue booking'
            // ],
            // [
            //     'name' => 'SEA_B',
            //     'display_name' => 'Student Experience and Activities Manager',
            //     'description' => 'SEA Officer in charge of making final decisions on the approval of events'
            // ],
            // [
            //     'name' => 'Registrar',
            //     'display_name' => 'Student Operation',
            //     'description' => 'The Registrar'
            // ],
            // [
            //     'name' => 'Finance',
            //     'display_name' => 'Finance',
            //     'description' => 'Finance department approves/disapproves the event proposal by the requested funds'
            // ],
            // [
            //     'name' => 'ExecGroup',
            //     'display_name' => 'Executive Group',
            //     'description' => 'Executive Group is involved when third party comes into play'
            // ],
            //
            // // Role
            // [
            //     'name' => 'role-list',
            //     'display_name' => 'Display Role Listing',
            //     'description' => 'See only Listing Of Role'
            // ],
            // [
            //     'name' => 'role-create',
            //     'display_name' => 'Create Role',
            //     'description' => 'Create New Role'
            // ],
            // [
            //     'name' => 'role-edit',
            //     'display_name' => 'Edit Role',
            //     'description' => 'Edit Role'
            // ],
            // [
            //     'name' => 'role-delete',
            //     'display_name' => 'Delete Role',
            //     'description' => 'Delete Role'
            // ],
            //
            // // Item
            // [
            //     'name' => 'item-list',
            //     'display_name' => 'Display Item Listing',
            //     'description' => 'See only Listing Of Item'
            // ],
            // [
            //     'name' => 'item-create',
            //     'display_name' => 'Create Item',
            //     'description' => 'Create New Item'
            // ],
            // [
            //     'name' => 'item-edit',
            //     'display_name' => 'Edit Item',
            //     'description' => 'Edit Item'
            // ],
            // [
            //     'name' => 'item-delete',
            //     'display_name' => 'Delete Item',
            //     'description' => 'Delete Item'
            // ]
        ]);
    }
}
