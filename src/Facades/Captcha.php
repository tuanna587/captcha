<?php

namespace tuanna587\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \tuanna587\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
