<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 18:11
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = $client::Tool()->picToVideo->musicGet();
$req->setAdvertiserId(ADVERTISER_ID);

print_r($client->excute($req));