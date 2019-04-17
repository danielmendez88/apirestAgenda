<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // llamar al seeder
        $this->truncateTable([
            'directorios',
        ]);

        $this->call([
            DirectorioSeeder::class,
        ]);
    }

    protected function truncateTable(array $table)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($table as $key) {
            # utilizamos un loop para recorrer el arreglo de las tablas que se generaran
            DB::table($key)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
