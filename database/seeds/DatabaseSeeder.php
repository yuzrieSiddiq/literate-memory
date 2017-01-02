<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);

        $this->call(ClubsTableSeeder::class);
        $this->call(ProposalTableSeeder::class);
        $this->call(EventdescriptionTableSeeder::class);
        $this->call(EventprogrammeTableSeeder::class);
        $this->call(RequestableItemsTableSeeder::class);
        $this->call(BorrowedItemsTableSeeder::class);
        $this->call(AssessmentResponsePlanTableSeeder::class);
        $this->call(AssessmentEventTableSeeder::class);
        $this->call(ProposalApprovalTableSeeder::class);
    }
}
