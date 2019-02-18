<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 15:33
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->queryTool->dpaProductAvailables();

print_r($client->excute($req));