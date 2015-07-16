<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call('llena_todas_las_tablas');
        $this->call('FamiliasTableSeederTableSeeder');
        $this->command->info('Tablas llenadas');
    }
}
