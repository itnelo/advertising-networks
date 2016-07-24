<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 24.07.16 14:32
 */

namespace app\components;

use Yii;
use yii\base\Component;
use yii\di\Instance;
use app\interfaces\AdvertServiceInterface;
use app\interfaces\AdvertiserInterface;
use app\interfaces\NetworkInterface;

class AdvertService extends Component implements AdvertServiceInterface
{
    /**
     * @var array
     */
    private $errors = [];

    /**
     * @inheritdoc
     */
    public function publish(AdvertiserInterface $advertiser, array $networks, array $data)
    {
        $this->errors = [];

        foreach ($networks as $networkConfig) {
            /** @var NetworkInterface $network */
            $network = Yii::createObject($networkConfig);

            try {
                $network->authorize($advertiser);
                $network->getCampaign()->create($data);
            } catch (\Exception $e) {
                // TODO
                $this->errors[] = $e->getMessage();
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
