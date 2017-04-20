<?php

use App\ResultadoCepre;
use Illuminate\Database\Seeder;

class ResultadoCepreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(ResultadoCepre::class,1000)->create();
    }
}
