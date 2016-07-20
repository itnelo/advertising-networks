<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:23
 */

namespace app\interfaces;

/**
 * Interface CampaignInterface
 * @package app\interfaces
 */
interface CampaignInterface
{
    /**
     * Performs campaign creation.
     *
     * @param array $params Params for new advertising campaign
     * @return bool
     */
    public function create(array $params);
}
