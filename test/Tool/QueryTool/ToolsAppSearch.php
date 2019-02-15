<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 15:13
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Tool()->queryTool->appSearch();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setAppName('头条');

print_r($client->excute($req));