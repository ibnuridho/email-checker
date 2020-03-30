<?php

namespace Ibnuridho\EmailChecker\Helpers;

use Illuminate\Support\Facades\Http;

class EmailCheck
{
    public function validEmail($email)
    {
        $response = Http::get('https://verify-email.org/home/verify-as-guest/' . $email);

        return json_decode($response);
    }
}
