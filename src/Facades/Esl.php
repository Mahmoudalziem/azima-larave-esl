<?php

namespace Azima\LaravelEsl\Facades;

use Illuminate\Support\Facades\Facade;

class Esl extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Azima\LaravelEsl\EslConnection::class;
    }
}
