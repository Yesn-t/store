<?php

use App\Equipo;
use Illuminate\Database\Seeder;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::create(['nombre_equipo' => 'Prog. Internet']);
        Equipo::create(['nombre_equipo' => 'Est. de datos']);
    }
}
