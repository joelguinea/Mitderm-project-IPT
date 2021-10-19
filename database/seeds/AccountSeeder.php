<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Jose',
                'init_invest' => 13144,
                'start_date' => '21-08-09',
                'remarks' => 'dont through fixer'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Lando',
                'init_invest' => 24121,
                'start_date' => '21-02-09',
                'remarks' => 'dont through fixer'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Bogart',
                'init_invest' => 12424,
                'start_date' => '21-03-10',
                'remarks' => 'dont through fixer'

            ],
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}

