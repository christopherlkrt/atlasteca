<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $gendersData = [
            'Ação',
            'Animação',
            'Aventura',
            'Comédia',
            'Cult',
            'Drama',
            'Ficção',
            'Romance',
            'Suspense',
            'Terror',
            'Trash'
        ];

        foreach ($gendersData as $item){
            $gender = New Gender();
            $gender->title = $item;
            $gender->save();
        }
    }
}
