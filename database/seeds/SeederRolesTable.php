<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class SeederRolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class)->create(['role' => '管理者']);
        factory(Role::class)->create(['role' => '購読者']);
        factory(Role::class)->create(['role' => '編集者']);
    }
}
