<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = New User();

        $user->name = 'Administrador';
        $user->email = 'admin@atlasteca.com.br';
        $user->password = bcrypt('123456');
        $user->remember_token = 'r3L9Vf9XsFAwIxGtxNaDPRfSb7Eyhn0CKlCFN4ZK9xJI54Y55hWW2UGk51BX';
        $user->save();
    }
}
