<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:12
 */

namespace app\interfaces;

/**
 * Interface LoginInterface
 * @package app\interfaces
 */
interface LoginInterface
{
    /**
     * Performs log in action.
     *
     * @param array $credentials array of authentication data
     * @return bool
     */
    public function login(array $credentials);
}
