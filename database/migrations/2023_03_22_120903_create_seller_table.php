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
        Schema::create('seller', function (Blueprint $table) {
            $table->id();
            $table->String('first_name')->nullable(false);
            $table->String('last_name')->nullable(false);
            $table->String('user_name')->unique()->nullable(false);
            $table->String('email')->unique()->nullable(false);
            $table->integer('age')->nullable(false);
            $table->date('date_birth')->nullable(false);
            $table->String('gender')->nullable(false);
            $table->String('nationality')->nullable(false);

            $table->String('phone_number')->nullable(false);
            $table->String('back_up_number');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller');
    }
};
