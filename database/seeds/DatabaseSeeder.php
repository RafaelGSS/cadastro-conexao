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
        // $this->call(UsersTableSeeder::class);
        // App\Token::create([
        //   'token' => str_random(40),
        //   'active' => 1
        // ]);
        App\Coach::create([
          'name' => 'Wander',
          'email' => 'wanderraphaeldourado@gmail.com⁠⁠⁠⁠'
        ]);
        // App\Coach::create([
        //   'name' => 'Guilherme',
        //   'email' => '⁠⁠⁠⁠⁠guidourado2014@gmail.com'
        // ]);
        // App\Coach::create([
        //   'name' => 'Marcos',
        //   'email' => 'marcoscoala14@gmail.com⁠⁠⁠⁠'
        // ]);
        // App\Coach::create([
        //   'name' => 'Julliany',
        //   'email' => 'douradojulliany@gmail.com'
        // ]);
        // App\Coach::create([
        //   'name' => 'Rafael',
        //   'email' => 'rafael.nunu@hotmail.com'
        // ]);
    }
}
