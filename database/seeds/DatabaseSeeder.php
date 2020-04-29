<?php

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
        factory(\App\User::class)->create(['first_name' => 'Deyvid', 'last_name' => 'Cruz', 'email' => 'deyvid.cruz@cancruz.com']);
        factory(\App\Room::class)->create(['room_name' => 'Suite PUIGRACIÓS']);
        factory(\App\Room::class)->create(['room_name' => 'Suite SANT CRISTÒFOL']);
        factory(\App\Room::class)->create(['room_name' => 'Suite ROCACENTELLA']);
    }
}