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
        ]);
        $yo = App\User::find(1);
        $yo->es_admin=true;
        $yo->save();

        factory(App\User::class, 29)->create([
        	'remember_token' => NULL
        ]);

    }
}
