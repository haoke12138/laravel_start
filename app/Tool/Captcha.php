<?php

namespace App\Tool;

use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class Captcha
{
    public static $code;

    public static function getCaptcha()
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        self::$code = $phrase->build(5);
        // 生成验证码图片的Builder对象,配置相应属性
        $builder = new CaptchaBuilder(self::$code, $phrase);
        // 设置背景颜色25,25,112
        $builder->setBackgroundColor(25, 25, 112);
        // 设置倾斜角度
        $builder->setMaxAngle(25);
        // 设置验证码后面最大行数
        $builder->setMaxBehindLines(10);
        // 设置验证码前面最大行数
        $builder->setMaxFrontLines(10);
        // 设置验证码颜色
        $builder->setTextColor(255, 255, 0);
        // 可以设置图片宽高及字体
        $builder->build($width = 150, $height = 40, $font = null);

        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        session()->put('captchaCode', $phrase);

        // 生成图片
        header('Cache-Control: no-cache, must-revalidate');
        header('Content-Type:image/jpeg');
        $builder->output();
    }
}
