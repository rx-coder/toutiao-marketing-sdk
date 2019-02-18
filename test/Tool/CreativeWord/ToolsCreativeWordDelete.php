<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 12:19
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->creativeWord->delete();

$req->setAdvertiserId(ADVERTISER_ID);
$req->setCreativeWordId(8248);

print_r($client->excute($req));