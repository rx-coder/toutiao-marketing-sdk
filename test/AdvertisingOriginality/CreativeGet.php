<?php
/**
 * 获取创意列表
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 10:00
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingOriginality\CreativeGet();
$req->setAdvertiserId(ADVERTISER_ID);
var_dump($client->excute($req)->getBody());
