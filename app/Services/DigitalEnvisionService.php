<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DigitalEnvisionService
{
    public function sendEmail(array $payload){
        return Http::withHeaders([
            'accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post(config('sdt.digital_env_base_url') . '/send-email', $payload);
    }
}
