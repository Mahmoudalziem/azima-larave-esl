<?php

namespace Freeswitch\LaravelEsl\Facades;

use Illuminate\Support\Facades\Facade;

class Esl extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Freeswitch\LaravelEsl\EslConnection::class;
    }
}
