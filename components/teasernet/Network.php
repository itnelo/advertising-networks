<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 20.07.16 18:48
 */

namespace app\components\teasernet;

use Yii;
use yii\helpers\VarDumper;
use app\components\AbstractNetwork;

/**
 * Class Network
 * @package app\components\teasernet
 */
class Network extends AbstractNetwork
{
    /**
     * @inheritdoc
     */
    public function login(array $credentials)
    {
        // TODO: Implement login() method.

        echo __METHOD__ . PHP_EOL;
        echo VarDumper::dumpAsString($credentials) . PHP_EOL;
    }
}
