<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class llena_todas_las_tablas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        $idr = \DB::table('users')->insertGetId(array(
            'first_name'  => 'Raúl',
            'last_name' => 'Burgos',
            'email' => 'rburgos@csra-bolivia.org',
            'password' => \Hash::make('EmdLa1975'),
            'active' => true,
            'type' => 'admin',
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ));

        \DB::table('user_profiles')->insert(array(
            'user_id'   => $idr,
            'bio'       => $faker->paragraph(rand(2,5)) ,
            'twitter'   => 'http://www.twitter.com/utasawa',
            'website'   => 'http;//www.' . $faker->domainName,
            'birthdate' => '1975/03/22',
            'created_at' => $faker->date('Y-m-d H:i:s'),
            'updated_at' => $faker->date('Y-m-d H:i:s')
        ));

        for($i=0; $i<30; $i++) {
            $nombre=$faker->firstName;
            $apellido=$faker->lastName;
            $completo = $nombre . ' ' . $apellido;
            $id = \DB::table('users')->insertGetId(array(
                'first_name' => $nombre,
                'last_name' => $apellido,
                'email' => $faker->unique()->email,
                'password' => \Hash::make('secret'),
                'active' => true,
                'type' => 'user',
                'created_at' => $faker->date('Y-m-d H:i:s'),
                'updated_at' => $faker->date('Y-m-d H:i:s')
            ));

            \DB::table('user_profiles')->insert(array(
                'user_id'   => $id,
                'bio'       => $faker->paragraph(rand(2,5)) ,
                'twitter'   => 'http://www.twitter.com/' . $faker->userName,
                'website'   => 'http;//www.' . $faker->domainName,
                'birthdate' => $faker->dateTimeBetween('-45 years','-18 years')->format('Y-m-d  '),
                'created_at' => $faker->date('Y-m-d H:i:s'),
                'updated_at' => $faker->date('Y-m-d H:i:s')
            ));

            \DB::table('tags')->insert(array(
                'name'          => $faker->word,
                'description'   => $faker->sentence(rand(6,50)) ,
                'created_at' => $faker->date('Y-m-d H:i:s'),
                'updated_at' => $faker->date('Y-m-d H:i:s')
            ));
        }
    }
}
