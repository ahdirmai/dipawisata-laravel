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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            // instagram
            $table->string('instagram')->nullable();
            // facebook
            $table->string('facebook')->nullable();
            // twitter
            $table->string('twitter')->nullable();
            // linkedin
            $table->string('linkedin')->nullable();
            // youtube
            $table->string('youtube')->nullable();
            // whatsapp
            $table->string('whatsapp')->nullable();
            //footer copy right
            $table->string('copy_right')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
