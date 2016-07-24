<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\interfaces\AdvertServiceInterface;
use app\interfaces\AdvertiserInterface;

/**
 * Class AdvertController
 * @package app\commands
 */
class AdvertController extends Controller
{
    /**
     * Creates new advertising campaign for all known networks.
     *
     * @param string $name Advertising campaign name
     * @param string $type Advertising campaign type
     * @param string $url Advertising campaign URL
     */
    public function actionCreate($name, $type, $url)
    {
        $this->getAdvertService()->publish($this->getAdvertiser(), $this->getNetworks(), func_get_args());
    }

    /**
     * @return AdvertServiceInterface
     */
    protected function getAdvertService()
    {
        return Yii::$app->advertService;
    }

    /**
     * @return AdvertiserInterface
     */
    protected function getAdvertiser()
    {
        return Yii::$app->advertiser;
    }

    /**
     * @return array
     */
    protected function getNetworks()
    {
        return Yii::$app->params['networks'];
    }
}
