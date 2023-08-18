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
        Schema::create('recyclebins', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->default(0);
            $table->integer('x_dimension')->default(0);
            $table->integer('y_dimension')->default(0);
            $table->integer('z_dimension')->default(0);
            $table->string('location')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recyclebins');
    }
};
