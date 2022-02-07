<?php

namespace Database\Seeders;

use App\Models\Bicikla;
use Illuminate\Database\Seeder;

class BiciklaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bicikla::truncate();
        Bicikla::create([
            "model"=>"capriolo",
            "boja"=>"roze",
            "materijal"=>"aluminijum",
            "stanje"=>"polovno",
            "uzrast"=>"deca",
            "cena"=>"10",
        ]);

        Bicikla::create([
            "model"=>"capriolo",
            "boja"=>"zelena",
            "materijal"=>"karbon",
            "stanje"=>"novo",
            "uzrast"=>"odrasli",
            "cena"=>"15"
        ]);
    }
}
