<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 14:13
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\CreativeWord\ToolsCreativeWordUpdate();

$req->setAdvertiserId(ADVERTISER_ID);
$req->setCreativeWordId('8250');
$req->setName('我再测测');
$req->setDefaultWord('测测');
$req->setWords(['试']);

print_r($client->excute($req));