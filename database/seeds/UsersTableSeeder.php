<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('users')->truncate(); // OJO: al ser foreign-key no funciona

        // DB::table('users')->insert(array(
        // 	'username' 	=> 'mawey',
        // 	'email' 	=> 'neoproyecto@gmail.com',
        // 	'password' 	=> bcrypt('r1c4r'),
        // 	'is_admin' 		=> true,
        // 	'created_at' => '2016-02-10 17:13:38',
        // 	'updated_at' => '2016-02-10 17:13:38',
        // ));
        factory(App\User::class)->create([
            'username'       => 'mawey71',
            'email'          => 'neoproyecto@gmail.com',
            'password'       => bcrypt('r1c4r'),
            'es_admin'       => true,
            'nombre'         => 'Ricardo',
            'apellido1'      => 'Mejias', 
            'apellido2'      => 'Rodriguez',
            'nif'            => '07235894W',
            'direccion'      => 'Calle Jabato, 42',
            'localidad'      => 'Rivas-Vaciamadrid',
            'provincia'      => 'Madrid',
            'codigo_postal'  => '28521',
            'telefono'       => '914995841',
            'telefono_movil' => '606511286'

        ]);

        factory(App\User::class, 29)->create([
        	'remember_token' => NULL
        ]);

    }
}
