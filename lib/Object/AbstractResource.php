<?php

namespace Shopify\Object;

use Shopify\Util;
use Shopify\Exception;

abstract class AbstractResource
{
    protected static $classUrl;

    public static function classUrl()
    {
        return self::$classUrl;
    }
}
