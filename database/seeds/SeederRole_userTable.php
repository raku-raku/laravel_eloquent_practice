<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Role;

class SeederRole_userTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('jp_JP');

        $createdAt = Carbon::now();
        $users = User::pluck('id')->all();
        $roles = Role::pluck('id')->all();
        $role_user = [];
        foreach ($users as $user) {
            $role_user[] = [
                'user_id' => $user,
                'role_id' => $faker->randomElement($roles),
                'column1' => $faker->realText(50, 2),
                'column2' => $faker->realText(50, 2),
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }
        DB::table('role_user')->insert($role_user);
    }
}
