<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:14
 */

namespace app\components;

use Yii;
use yii\base\Component;
use app\interfaces\AdvertiserInterface;
use app\interfaces\LoginInterface;
use app\interfaces\NetworkInterface;

abstract class AbstractNetwork extends Component implements NetworkInterface, LoginInterface
{
    /**
     * @var array|callable|string
     */
    private $campaign;

    /**
     * @inheritdoc
     */
    final public function authorize(AdvertiserInterface $advertiser)
    {
        $this->login($advertiser->getCredentials());
    }

    /**
     * @inheritdoc
     */
    abstract public function login(array $credentials);

    /**
     * @inheritdoc
     */
    public function setCampaign($config)
    {
        $this->campaign = $config;
    }

    /**
     * @inheritdoc
     */
    public function getCampaign()
    {
        if (empty($this->campaign)) {
            $childClass = get_called_class();
            $childNamespace = substr($childClass, 0, strrpos($childClass, "\\"));
            $campaignClass = $childNamespace . "\\" . 'Campaign';

            if (class_exists($campaignClass)) {
                $this->setCampaign($campaignClass);
            }
        }

        return Yii::createObject($this->campaign);
    }
}
