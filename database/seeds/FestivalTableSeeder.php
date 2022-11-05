<?php

use Illuminate\Database\Seeder;

use App\models\Festival;

use Faker\Generator as Faker;

class FestivalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for($i = 0; $i < 20; $i++){

            $festival = new Festival();
            $festival->nome_evento = $faker->name();
            $festival->label = $faker->name();
            $festival->outdoor = $faker->boolean();
            $festival->indirizzo = $faker->address();
            $festival->quando = $faker->date();

            $festival->save();

        }
    }
}
