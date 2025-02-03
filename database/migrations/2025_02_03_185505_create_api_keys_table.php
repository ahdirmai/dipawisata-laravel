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
        // Api Key
        // Google Client ID Key

        // 342485876322-dlum5iu8ppu44m38sbfbf4ok0i86figc.apps.googleusercontent.com
        // Google Client Secret Key

        // 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
        // Midtrans Client Key

        // Mid-client-ntXA-4vNvLRH5cUH
        // Midtrans Server Key


        Schema::create('setting_api_keys', function (Blueprint $table) {
            $table->id();

            // Google Client ID Key
            $table->string('google_client_id')->nullable();
            $table->string('google_client_secret')->nullable();
            $table->string('midtrans_client_key')->nullable();
            $table->string('midtrans_server_key')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_keys');
    }
};
