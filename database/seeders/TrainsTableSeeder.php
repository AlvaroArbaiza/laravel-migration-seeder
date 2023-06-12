<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        for($i = 0; $i < 10 ; $i++) {

            $newHotel = new Hotel();
            $newHotel->azienda = $faker->company();
            $newHotel->stazione_di_partenza = $faker->streetAddress();
            $newHotel->orario_di_partenza = $faker->time();
            $newHotel->orario_di_arrivo = $faker->time();
            $newHotel->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newHotel->numero_carrozze = $faker->randomNumber(2, false);
            $newHotel->in_orario = $faker->randomElement([true, false]);
            $newHotel->cancellato = $faker->randomElement([true, false]);
            $newHotel->save();
        }
    }
}
