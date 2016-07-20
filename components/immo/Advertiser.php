<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:09
 */

namespace app\components\immo;

use yii\base\Component;
use app\interfaces\AdvertiserInterface;

/**
 * Class Advertiser
 * @package app\components\immo
 */
class Advertiser extends Component implements AdvertiserInterface
{
    /**
     * @var array
     */
    private $credentials;

    /**
     * @inheritdoc
     */
    public function setCredentials(array $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @inheritdoc
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}
