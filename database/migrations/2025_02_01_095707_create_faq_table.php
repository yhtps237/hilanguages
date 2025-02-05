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
        Schema::create('faq', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Ümumi suallar', 'Ödənişlər'])->nullable(false);
            $table->text('head_az')->nullable(false);
            $table->text('head_en')->nullable(false);
            $table->text('content_az')->nullable(false);
            $table->text('content_en')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq');
    }
};
