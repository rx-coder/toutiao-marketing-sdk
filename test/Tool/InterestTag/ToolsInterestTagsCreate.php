<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 17:02
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->interestTag->create();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setName("测试测试");
$req->setWords(['我', '测测']);

print_r($client->excute($req));