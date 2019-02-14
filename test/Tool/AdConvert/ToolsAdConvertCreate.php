<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 14:40
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\AdConvert\ToolsAdConvertCreate();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setName("测测测");
$req->setConvertSourceType('AD_CONVERT_SOURCE_TYPE_JS');
$req->setConvertType("AD_CONVERT_TYPE_FORM");

print_r($client->excute($req));