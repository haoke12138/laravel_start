<?php

namespace App\Providers;

use App\Tool\Captcha;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 自定义规则
//        Validator::extend('foo', 'FooValidator@validate');
        Validator::extend('captcha', function ($attribute, $value, $parameters, $validator) {
            return true;
            var_dump(Captcha::$code, $value);exit();
            return $value == Captcha::$code;
        });
    }
}
