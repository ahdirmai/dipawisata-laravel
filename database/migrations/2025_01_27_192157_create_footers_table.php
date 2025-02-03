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
        Schema::create('setting_footers', function (Blueprint $table) {
            $table->id();
            // instagram
            $table->string('instagram_url')->nullable();
            // facebook
            $table->string('facebook_url')->nullable();
            // twitter
            $table->string('twitter_url')->nullable();
            // linkedin
            $table->string('linkedin_url')->nullable();
            // youtube
            $table->string('youtube_url')->nullable();
            // whatsapp
            $table->string('whatsapp_url')->nullable();
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
