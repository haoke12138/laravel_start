<?php

namespace App\Http\Controllers;

use App\Tool\Captcha;

class CaptchaController extends Controller
{
    public function getCaptcha()
    {
        Captcha::getCaptcha();
        var_dump(Captcha::$code);exit();
    }

}
