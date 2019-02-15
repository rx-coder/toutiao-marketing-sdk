<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:06
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Tool()->queryTool->dpaBehaviourAvailables();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setPlatformId(1001);

print_r($client->excute($req));