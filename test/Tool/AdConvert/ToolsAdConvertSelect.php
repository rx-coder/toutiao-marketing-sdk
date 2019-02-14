<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 15:22
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Tool\AdConvert\ToolsAdConvertSelect();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setPackageName('sdwe');

print_r($client->excute($req));