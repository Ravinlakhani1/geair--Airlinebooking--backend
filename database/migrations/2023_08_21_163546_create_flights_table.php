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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->string('flight_type')->comment(json_encode(config('flight_type')));
            $table->foreignId('airline_id')->constrained();
            $table->foreignId('plane_id')->constrained();
            $table->foreignId('origin_id')->constrained('airports');
            $table->foreignId('destination_id')->constrained('airports');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('available_seats');
            $table->integer('total_seats');
            $table->double('price', 8, 2);
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
