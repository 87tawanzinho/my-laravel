<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->timestamps();
        });


         $champions = [  "Aatrox", "Ahri", "Akali", "Alistar", "Amumu", "Anivia", "Ashe", 
         "Aurelion Sol", "Bard", "Blitzcrank", "Brand", "Braum", "Caitlyn", 
         "Camille", "Cassiopeia", "Cho'Gath", "Corki", "Darius", "Diana", 
         "Dr. Mundo", "Draven", "Ekko", "Elise", "Evelynn", "Ezreal", "Fiddlesticks", 
         "Fiora", "Fizz", "Galio", "Gangplank", "Garen", "Gnar", "Gragas", "Graves", 
         "Hecarim", "Heimerdinger", "Illaoi", "Irelia", "Ivern", "Janna", "Jarvan IV", 
         "Jhin", "Jinx", "Kai'Sa", "Kalista", "Karma", "Karthus", "Kassadin", 
         "Katarina", "Kayle", "Kennen", "Kha'Zix", "Kindred", "Kled", "LeBlanc", 
         "Lee Sin", "Leona", "Lillia", "Lissandra", "Lucian", "Lulu", "Malphite", 
         "Malzahar", "Maokai", "Miss Fortune", "Wukong", "Mordekaiser", "Nami", 
         "Nasus", "Nautilus", "Neeko", "Nidalee", "Olaf", "Orianna", "Ornn", 
         "Pantheon", "Poppy", "Pyke", "Qiyana", "Rakan", "Rammus", "Rek'Sai", 
         "Renekton", "Riven", "Rumble", "Ryze", "Samira", "Sejuani", "Senna", 
         "Seraphine", "Sett", "Shaco", "Shen", "Singed", "Sivir", "Sona", "Soraka", 
         "Swain", "Sylas", "Syndra", "Tahm Kench", "Taliyah", "Taric", "Teemo", 
         "Thresh", "Tristana", "Trundle", "Twisted Fate", "Udyr", "Urgot", 
         "Varus", "Vayne", "Veigar", "Vel'Koz", "Vi", "Viktor", "Vladimir", 
         "Volibear", "Warwick", "Wukong", "Xayah", "Xerath", "Yuumi", "Zed", 
         "Zeri", "Ziggs", "Zilean", "Zoe", "Zyra"
    ]; 


    foreach ($champions as $champion) {
        DB::table('champions')->insert([
            "name" => $champion
        ]);
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }


};
