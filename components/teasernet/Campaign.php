<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 19:20
 */

namespace app\components\teasernet;

use Yii;
use yii\base\Component;
use yii\helpers\VarDumper;
use app\interfaces\CampaignInterface;

/**
 * Class Campaign
 * @package app\components\teasernet
 */
class Campaign extends Component implements CampaignInterface
{
    /**
     * @inheritdoc
     */
    public function create(array $params)
    {
        // TODO: Implement create() method.

        echo __METHOD__ . PHP_EOL;
        echo VarDumper::dumpAsString($params) . PHP_EOL;
    }
}
