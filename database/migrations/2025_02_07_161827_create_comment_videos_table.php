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
        Schema::create('comment_videos', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable(false);
            $table->string('head_az')->nullable(false);
            $table->string('head_en')->nullable(false);
            $table->string('head_ru')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_videos');
    }
};
