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
        Schema::create('our_team', function (Blueprint $table) {
            $table->id();
            $table->string('name_az');
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('position_az');
            $table->string('position_en');
            $table->string('position_ru');
            $table->string('image');
            $table->text('about_az');
            $table->text('about_en');
            $table->text('about_ru');
            $table->string('slug_az');
            $table->string('slug_en');
            $table->string('slug_ru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_team');
    }
};
