<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class SeederCountriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Country::class, 10)->create();
    }
}
