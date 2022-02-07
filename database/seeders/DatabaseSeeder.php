<?php

namespace Database\Seeders;
use App\Models\Bicikla;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Bicikla::truncate();
        Rezervacija::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $b = Bicikla::create([
            "model"=>"capriolo",
            "boja"=>"plava",
            "materijal"=>"celik",
            "stanje"=>"novo",
            "uzrast"=>"odrasli",
            "cena"=>"20",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_preuzimanja"=>"2021-01-01",
            "brDana"=>"3",
            "kontakt"=> "063111111",
            "bicikla_id"=> $b->id,
            "user_id"=> $user->id,
        ]);
    }
}
