<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Enum;

/**
 * Interface EnumInterface
 *
 * @author Nate Brunette <nbrunett@nerdery.com>
 */
interface EnumInterface
{
    /**
     * Return an array of enum class constants
     *
     * @return array
     */
    public static function getConstants();
}
