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
        DB::table('users')->insert([
            'name' => 'Amirol',
            'email' => 'amirol@gmail.com',
            'password' => bcrypt('password'),
            'username' => 'amirol',
            'phone' => '012345678',
            'address' => 'Tmn ABC Kuala Lumpur',
            'role' => 'admin',
            'status' => 'active'
        ]);
        
        $loop = 1;
        while( $loop <= 30 )
        {
            DB::table('users')->insert([
                'name' => str_random(7),
                'email' => str_random(7).'@gmail.com',
                'password' => bcrypt('password'),
                'username' => str_random(7),
                'phone' => rand(5, 7),
                'address' => str_random(7),
                'role' => 'user',
                'status' => 'active'
            ]);

            $loop++;
        }

    }
}
