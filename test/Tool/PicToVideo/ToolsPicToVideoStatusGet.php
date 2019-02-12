<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 18:13
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Tool\PicToVideo\V1\ToolsPicToVideoStatusGet();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setVideoId('11');

print_r($client->excute($req));
