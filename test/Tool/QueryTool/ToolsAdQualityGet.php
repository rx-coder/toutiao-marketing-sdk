<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:15
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\QueryTool\ToolsAdQualityGet();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setAdIds(['100']);

print_r($client->excute($req));