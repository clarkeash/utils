<?php

namespace Clarkeash\Utils;

trait MethodAtClassTrait
{
    public static function method($name)
    {
        return static::class . '@' . $name;
    }
}
