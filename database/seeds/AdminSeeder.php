<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate
        DB::table('admin')->truncate();

        // addnew admin
        DB::table('admin')->insert([
            'username' => 'administrator',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
