<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 15:06
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Tool()->adConvert->push();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setConvertId(1624248653889560);
$req->setTargetAdvertiserIds([162424865388]);

print_r($client->excute($req));