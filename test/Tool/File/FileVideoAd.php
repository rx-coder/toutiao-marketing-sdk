<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 11:01
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$file = __DIR__ . '/test.mp4';
$req = $client::Tool()->file->videoAd();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setVideoFile($file);
$req->setVideoSignature(md5_file($file));

print_r($client->excute($req));