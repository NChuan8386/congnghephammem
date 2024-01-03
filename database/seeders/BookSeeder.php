<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
    for($i=0;$i<50;$i++){
        Book::create([
            'bookname'=>$faker->sentence(6,true),
            'info'=>$faker->sentence(6,true),
            'years'=>$faker->year,
            'author_id'=>$faker->numberBetween(1,25),// ngoai



        ]);
    }
    }
}

