<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            // Azienda
            $table->string('manufacturer', 30);
            // Tipo treno (R, RV, FR, ecc )
            $table->string('train_type', 5);
            // Stazione di partenza;
            $table->string('arriving_from', 100);
            // Orario di partenza;
            $table->time('departure_time');
            // Stazione di arrivo;
            $table->string('going_to', 100);
            // Orario di arrivo;
            $table->time('arrival_time');
            // Codice Treno;
            $table->integer('train_identifier');
            // Totale Carrozze;
            $table->integer('number_of_carriages')->default(0);
            // Se in orario o meno;
            $table->boolean('has_delay')->default(false);
            // Minuti di ritardo;
            $table->integer('minutes_of_delay')->nullable();
            // Se cancellato o meno.
            $table->boolean('is_canceled')->default(false);
            
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
