<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Rizal',
                'fname' => 'Jose',
                'address' => 'Cawayanan, Tubigon',
                'phone' => '09945378924',
                'email' => 'JoseRiz69@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Lando',
                'fname' => 'Sumail',
                'address' => 'Pandan, Tubigon',
                'phone' => '09967345233',
                'email' => 'Bogs52@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Bogart',
                'fname' => 'Makabughat',
                'address' => 'Cabulijan, Tubigon',
                'phone' => '09232432234',
                'email' => 'joel@gmail.com',
                'password' => bcrypt('password123')

            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
