<?php

use App\EstadoResultados;
use App\ResultadoCepre;
use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	EstadoResultados::create(['activo'=>1]);
    }
}
