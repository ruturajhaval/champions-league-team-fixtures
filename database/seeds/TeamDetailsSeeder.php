<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("team_details")->insert([
            [
                "tName"=>"Real Madrid",
                "tCountry"=>"Spain",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"real-madrid.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Atletico Madrid",
                "tCountry"=>"Spain",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"atletico.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Bayern Mnchen",
                "tCountry"=>"Germany",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"bayern.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Barcelona",
                "tCountry"=>"Spain",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"barcelona.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Juventus",
                "tCountry"=>"Italy",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"juventus.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Paris Saint-Germain",
                "tCountry"=>"France",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"paris-saint-germain.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Manchester City",
                "tCountry"=>"England",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"manchester-city.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Lokomotiv Moskva",
                "tCountry"=>"Russia",
                "tDomesticVictory"=>"yes",
                "tLogos"=>"lokomotiv-moskva.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Borussia Dortmund",
                "tCountry"=>"Germany",
                "tDomesticVictory"=>"no",
                "tLogos"=>"dortmund.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Porto",
                "tCountry"=>"Portugal",
                "tDomesticVictory"=>"no",
                "tLogos"=>"porto.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Manchester United",
                "tCountry"=>"England",
                "tDomesticVictory"=>"no",
                "tLogos"=>"manchester-united.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Shakhtar Donetsk",
                "tCountry"=>"Ukraine",
                "tDomesticVictory"=>"no",
                "tLogos"=>"shakhtar-donetsk.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Napoli",
                "tCountry"=>"Italy",
                "tDomesticVictory"=>"no",
                "tLogos"=>"napoli.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Tottenham Hotspur",
                "tCountry"=>"England",
                "tDomesticVictory"=>"no",
                "tLogos"=>"tottenham-hotspur.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Roma",
                "tCountry"=>"Italy",
                "tDomesticVictory"=>"no",
                "tLogos"=>"roma.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Liverpool",
                "tCountry"=>"England",
                "tDomesticVictory"=>"no",
                "tLogos"=>"liverpool.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Schalke",
                "tCountry"=>"Germany",
                "tDomesticVictory"=>"no",
                "tLogos"=>"schalke.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Lyon",
                "tCountry"=>"France",
                "tDomesticVictory"=>"no",
                "tLogos"=>"lyon.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Monaco",
                "tCountry"=>"France",
                "tDomesticVictory"=>"no",
                "tLogos"=>"monaco.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"CSKA Moskva",
                "tCountry"=>"Russia",
                "tDomesticVictory"=>"no",
                "tLogos"=>"cska-moskva.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Valencia",
                "tCountry"=>"Spain",
                "tDomesticVictory"=>"no",
                "tLogos"=>"valencia.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Viktoria PlzeH",
                "tCountry"=>"Czechia",
                "tDomesticVictory"=>"no",
                "tLogos"=>"viktoria-plzeh.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Club Brugge",
                "tCountry"=>"Belgium",
                "tDomesticVictory"=>"no",
                "tLogos"=>"club-brugge.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Galatasaray",
                "tCountry"=>"Turkey",
                "tDomesticVictory"=>"no",
                "tLogos"=>"galatasaray.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Internazionale Milano",
                "tCountry"=>"Italy",
                "tDomesticVictory"=>"no",
                "tLogos"=>"internazionale.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Hoffenheim",
                "tCountry"=>"Germany",
                "tDomesticVictory"=>"no",
                "tLogos"=>"hoffenheim.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Benfica",
                "tCountry"=>"Portugal",
                "tDomesticVictory"=>"no",
                "tLogos"=>"benfica.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Ajax",
                "tCountry"=>"Netherlands",
                "tDomesticVictory"=>"no",
                "tLogos"=>"ajax.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"PSV Eindhoven",
                "tCountry"=>"Netherlands",
                "tDomesticVictory"=>"no",
                "tLogos"=>"psv-eindhoven.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Young Boys",
                "tCountry"=>"Switzerland",
                "tDomesticVictory"=>"no",
                "tLogos"=>"young-boys.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"Crvena zvezda",
                "tCountry"=>"Siberia		",
                "tDomesticVictory"=>"no",
                "tLogos"=>"crvena-zvezda.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ],
            [
                "tName"=>"AEK Athens",
                "tCountry"=>"Greece",
                "tDomesticVictory"=>"no",
                "tLogos"=>"aek-athens.png",
                "tStatus"=>"active",
                "created_at"=>date("Y-m-d H:i:s", strtotime("now")),
                "updated_at"=>date("Y-m-d H:i:s", strtotime("now"))
            ]
        ]);
    }
}
