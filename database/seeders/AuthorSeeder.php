<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Author;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
	$faker = Faker::create();
    for($i=0;$i<50;$i++){
        Author::create([
            'author'=>$faker->username,
            'password'=>$faker->password(3,true),
            'email'=>$faker->email(2,true),
            

        ]);
    }
    }
}
