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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('user_address');
            $table->string('user_additional_info')->nullable();
            $table->integer('count')->default(1);
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('meal_id')->references('id')->on('meals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status')->references('id')->on('order_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->date('closed_at')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
