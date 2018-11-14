<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class SeederPostsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10)->create();
    }
}
