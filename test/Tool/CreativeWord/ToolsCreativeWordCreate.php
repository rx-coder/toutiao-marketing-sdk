<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 12:13
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\CreativeWord\V1\ToolsCreativeWordCreate();

$req->setAdvertiserId(ADVERTISER_ID);
$req->setName('花花卡');
$req->setDefaultWord('测');
$req->setWords(['试']);

print_r($client->excute($req));