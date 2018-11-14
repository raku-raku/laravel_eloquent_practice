<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class SeederUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 3)->create();
    }
}
