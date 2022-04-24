<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meal_id')->references('id')->on('meals')->onUpdate('cascade')->onDelete('cascade');
            $table->float('value')->nullable(false);
            $table->float('proteins')->nullable(false);
            $table->float('fats')->nullable(false);
            $table->float('carbs')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutritional_values');
    }
};
