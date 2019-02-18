<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 18:25
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->picToVideo->taskCallback();