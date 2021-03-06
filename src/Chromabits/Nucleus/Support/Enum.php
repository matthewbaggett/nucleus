<?php

/**
 * Copyright 2015, Eduardo Trujillo
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Nucleus package
 */

namespace Chromabits\Nucleus\Support;

use ReflectionClass;

/**
 * Class Enum
 *
 * An enumeration emulation.
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Nucleus\Support
 */
abstract class Enum
{
    /**
     * Get the names of possible constants in the enumeration.
     *
     * @return array
     */
    public static function getKeys()
    {
        return array_keys(static::getValues());
    }

    /**
     * Get the value of all constants in the enumeration.
     *
     * @return array
     */
    public static function getValues()
    {
        $self = new ReflectionClass(static::class);

        return $self->getConstants();
    }
}
