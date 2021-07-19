<?php

use App\sysuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert([
           'uname' => 'admin',
           'namalengkap' => 'administrator',
           'email' => 'administrator',
           'upass' => sha1('administrator') 
        ]);
    }
}