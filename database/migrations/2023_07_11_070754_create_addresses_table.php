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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');
			$table->string('street')->nullable();
			$table->string('suite')->nullable();
			$table->string('city');
			$table->string('zipcode');
			$table->decimal('geo_lat', 10, 7);
			$table->decimal('geo_lng', 10, 7);
            $table->timestamps();
	
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
