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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('mobile');
            $table->string('email');
            $table->integer('number_of_passengers');
            $table->foreignId('flight_id')->constrained();
            $table->foreignId('payment_id')->constrained();
            $table->decimal('sub_total',8,2);
            $table->decimal('text',8,2);
            $table->decimal('total',8,2);
            $table->string('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
