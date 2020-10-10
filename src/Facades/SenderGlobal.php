<?php

namespace Eduardom\SenderGlobal\Facades;

use \Illuminate\Support\Facades\Facade;

class SenderGlobal extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'senderglobal';
    }
}