<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Orlanda Jorge',
            'email' =>'orlanda@jorge.com',
            'password' => Hash::make('12345'),
            'remember_token' =>str_random('10'),

            
            
                    ]);
    }
}
