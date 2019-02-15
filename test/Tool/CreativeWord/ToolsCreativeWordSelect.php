<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 14:38
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Tool()->creativeWord->select();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setCreativeWordIds(['8250']);

print_r($client->excute($req));
