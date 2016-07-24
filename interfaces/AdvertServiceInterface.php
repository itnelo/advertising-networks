<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 24.07.16 14:32
 */

namespace app\interfaces;

/**
 * Interface AdvertServiceInterface
 * @package app\interfaces
 */
interface AdvertServiceInterface
{
    /**
     * Publish advertising campaign across all known networks.
     *
     * @param AdvertiserInterface $advertiser
     * @param array $networks Array of networks configurations.
     * @param array $data Advertising campaign data
     */
    public function publish(AdvertiserInterface $advertiser, array $networks, array $data);

    /**
     * Returns array of error messages raised during publishing.
     *
     * @return array
     */
    public function getErrors();
}
