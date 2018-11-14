<?php

use Illuminate\Database\Seeder;
use App\Models\Video;

class SeederVideosTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Video::class, 10)->create();
    }
}
