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
        // master
        $this->call(SeederCountriesTable::class);
        $this->call(SeederTagsTable::class);
        $this->call(SeederRolesTable::class);

        // transaction
        $this->call(SeederUsersTable::class);
        $this->call(SeederPhonesTable::class);
        $this->call(SeederPostsTable::class);
        $this->call(SeederVideosTable::class);
        $this->call(SeederCommentsTable::class);
        $this->call(SeederRole_userTable::class);
        $this->call(SeederTaggablesTable::class);
    }
}
