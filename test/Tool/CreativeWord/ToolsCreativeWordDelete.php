<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 12:19
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\CreativeWord\ToolsCreativeWordDelete();

$req->setAdvertiserId(ADVERTISER_ID);
$req->setCreativeWordId(8248);

print_r($client->excute($req));