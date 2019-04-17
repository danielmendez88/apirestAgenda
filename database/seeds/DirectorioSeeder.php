<?php

use Illuminate\Database\Seeder;
use App\Models\Directorio;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cargamos el seeder
        factory(Directorio::class)->times(25)->create();
    }
}
