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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->String('user_name')->nullable(false);
            $table->String('first_name')->nullable(false);
            $table->String('last_name')->nullable(false);
            $table->String('type')->nullable(false);
            $table->Integer('seller_id')->nullable(false);
            $table->String('phone_num')->nullable(false);
            $table->String('email')->unique()->nullable(false);
            $table->String('password')->nullable(false);
            $table->String('image')->nullable(false);
            $table->tinyInteger('status')->nullable(false);
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
