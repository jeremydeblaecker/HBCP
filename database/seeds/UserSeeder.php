<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Person;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create(array(
            'first_name' => 'ANDRE',
            'last_name' => 'Dylan',
        ));

        User::create(array(
            'person_id' => '1',
            'password' => bcrypt('password'), // "hashed password"
            'email' => 'dylanandre@orange.fr',
        ));
    }
}
