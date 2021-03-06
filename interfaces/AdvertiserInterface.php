<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:09
 */

namespace app\interfaces;

/**
 * Interface AdvertiserInterface
 * @package app\interfaces
 */
interface AdvertiserInterface
{
    /**
     * Sets array of advertiser authentication params.
     */
    public function setCredentials(array $credentials);

    /**
     * Returns array of advertiser authentication params.
     *
     * @return array
     */
    public function getCredentials();
}
