<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    //   $table->string('google_client_id')->nullable();
    //         $table->string('google_client_secret')->nullable();
    //         $table->string('midtrans_client_key')->nullable();
    //         $table->string('midtrans_server_key')->nullable();

    protected $fillable = [
        'google_client_id',
        'google_client_secret',
        'midtrans_client_key',
        'midtrans_server_key'
    ];

    protected $table = 'setting_api_keys';
    //
}
