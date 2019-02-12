<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 15:55
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Tool\AdConvert\V1\ToolsAdvConvertSelect();
$req->setAdvertiserId(ADVERTISER_ID);

print_r($client->excute($req));