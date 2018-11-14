<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class SeederCommentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class, 'post', 5)->create();
        factory(Comment::class, 'video', 5)->create();
    }
}
