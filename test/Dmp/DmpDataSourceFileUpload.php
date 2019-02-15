<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 18:17
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Dmp()->dataSourceFileUpload();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setFile(__DIR__ . '/test.zip');

print_r($client->excute($req));