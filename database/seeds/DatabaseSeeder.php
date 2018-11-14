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
        factory(User::class)->create(
            [
                'email' => 'ramzan@gmail.com',
                'name' => 'Ramzan'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'saad@gmail.com',
                'name' => 'Saad'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'waqas@gmail.com',
                'name' => 'Waqas'
            ]
        );
    }
}
