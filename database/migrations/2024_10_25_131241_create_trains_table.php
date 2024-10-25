<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     /*Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato 
*/

    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda",150);
            $table->string("stazione_di_partenza",250);
            $table->string("stazione_di_arrivo",250);
            $table->date("data_di_partenza");
            $table->time('orario_di_partenza',0)->nullable();
            $table->string("codice_treno",250)->unique();
            $table->integer("numero_carrozze")->nullable();
            $table->boolean("in_orario")->default(true);
            $table->boolean("cancellato")->default(false);
            $table->date("data_odierna");
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
