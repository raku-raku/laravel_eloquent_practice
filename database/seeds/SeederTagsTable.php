<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class SeederTagsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class)->create(['tag' => 'tech']);
        factory(Tag::class)->create(['tag' => 'life']);
        factory(Tag::class)->create(['tag' => 'music']);
        factory(Tag::class)->create(['tag' => 'business']);
    }
}
