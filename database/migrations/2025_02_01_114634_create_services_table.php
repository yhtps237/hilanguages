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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('head_az')->nullable(false);
            $table->string('head_en')->nullable(false);
            $table->string('head_ru')->nullable(false);
            $table->text('content_az')->nullable(false);
            $table->text('content_en')->nullable(false);
            $table->text('content_ru')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('description_az')->nullable(false);
            $table->string('description_en')->nullable(false);
            $table->string('description_ru')->nullable(false);
            $table->string('keyword')->nullable(false);
            $table->string('slug_az')->nullable(false);
            $table->string('slug_en')->nullable(false);
            $table->string('slug_ru')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
