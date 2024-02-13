<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    protected $baseUrl = 'https://sms.yegara.com/api/';
    protected $token='';
    function __construct()
    {
        $this->token=env('YEGARA_SMS_TOKEN');
    }
    

    public function sendSms($to, $message, $templateId='otp')
    {
        $response = Http::post($this->baseUrl . 'send', [
            'token' => $this->token,
            'to' => $to,
            'message' => $message,
            'template_id' => $templateId,
        ]);

        return $response->json();
    }
}
