<?php
/**
 * 创意详细信息
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 11:49
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingOriginality\V1\CreativeRead();
$req->setAdvertiserId(ADVERTISER_ID)->setAdId('1625254884489223');
var_dump($client->excute($req)->getBody());
