<?php

use Illuminate\Database\Seeder;

class seedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->insert([
        'username' => 'test01',
        'mail' => '01@mail.com',
        'password' => bcrypt('password'),
        'bio' => 'これはテストです。',
        'created_at' => new DateTime()
    ]);
    
    }
}
