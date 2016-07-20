<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:19
 */

namespace app\interfaces;

/**
 * Interface NetworkInterface
 * @package app\interfaces
 */
interface NetworkInterface
{
    /**
     * Performs advertiser's authorization.
     *
     * @param AdvertiserInterface $advertiser
     * @return bool
     */
    public function authorize(AdvertiserInterface $advertiser);

    /**
     * Sets campaign (form) details for this network.
     *
     * @param array|callable|string
     */
    public function setCampaign($config);

    /**
     * Returns campaign (form) details for this network.
     *
     * @return CampaignInterface
     */
    public function getCampaign();
}
