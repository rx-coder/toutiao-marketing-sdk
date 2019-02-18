<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:15
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->queryTool->adQualityGet();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setAdIds(['100']);

print_r($client->excute($req));