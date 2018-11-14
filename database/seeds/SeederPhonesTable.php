<?php

use Illuminate\Database\Seeder;
use App\Models\Phone;

class SeederPhonesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Phone::class)->create();
        factory(Phone::class, 9)->create([
            'user_id' => null
        ]);
    }
}
