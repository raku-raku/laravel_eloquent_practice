<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;
use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;

class SeederTaggablesTable extends Seeder
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
        $posts = Post::pluck('id')->all();
        $videos = Video::pluck('id')->all();
        $tags = Tag::pluck('id')->all();
        $taggables = [];

        for ($i = 1; $i <= 10; $i++) {
            list($type, $model) = ($i > 5) ? [Post::class, $posts]: [Video::class, $videos];
            $taggables[] = [
                'tag_id' => $faker->randomElement($tags),
                'taggable_id' => $faker->randomElement($model),
                'taggable_type' => $type,
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }
        DB::table('taggables')->insert($taggables);
    }
}
