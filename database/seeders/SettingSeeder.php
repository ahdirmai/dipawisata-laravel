<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // footer datas
        $footer_datas = [
            [
                'instagram_url' => 'https://www.instagram.com/',
                'facebook_url' => 'https://www.facebook.com/',
                'twitter_url' => 'https://twitter.com/',
                'linkedin_url' => 'https://www.linkedin.com/',
                'youtube_url' => 'https://www.youtube.com/',
                'whatsapp_url' => 'https://wa.me/',
                'copy_right' => '© 2021 All rights reserved'
            ]
        ];

        foreach ($footer_datas as $footer_data) {
            \App\Models\Setting\Footer::create($footer_data);
        }
        // end footer datas


        // header datas
        $header_datas = [

            [
                'website_name' => 'Dipawisata.com',
                'search_placeholder' => 'Search here'
            ]
        ];

        foreach ($header_datas as $header_data) {
            \App\Models\Setting\Header::create($header_data);
        }

        // end header datas



        // api key datas
        $api_key_datas = [
            [
                'google_client_id' => '342485876322-dlum5iu8ppu44m38sbfbf4ok0i86figc.apps.googleusercontent.com',
                'google_client_secret' => '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',
                'midtrans_client_key' => 'Mid-client-ntXA-4vNvLRH5cUH',
                'midtrans_server_key' => 'Mid-server-92sJH2Vb1SJIgMNBAL10Vj67'
            ]
        ];

        foreach ($api_key_datas as $api_key_data) {
            \App\Models\Setting\ApiKey::create($api_key_data);
        }
    }
}
