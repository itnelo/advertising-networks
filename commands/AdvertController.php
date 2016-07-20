<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\interfaces\AdvertiserInterface;
use app\interfaces\NetworkInterface;
use app\interfaces\CampaignInterface;

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
        $networks = $this->getNetworks();
        $advertiser = $this->getAdvertiser();

        foreach ($networks as $networkConfig) {
            /** @var NetworkInterface $network */
            $network = Yii::createObject($networkConfig);

            try {
                $network->authorize($advertiser);

                /** @var CampaignInterface $campaign */
                $campaign = $network->campaign;
                $campaign->create(func_get_args());
            } catch (\Exception $e) {
                // TODO
                $this->stderr($e->getMessage() . PHP_EOL);
            }
        }
    }

    /**
     * @return array
     */
    protected function getNetworks()
    {
        return Yii::$app->params['networks'];
    }

    /**
     * @return AdvertiserInterface
     */
    protected function getAdvertiser()
    {
        return Yii::$app->advertiser;
    }
}
