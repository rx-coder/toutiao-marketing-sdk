<?php
/**
 * 创意详细信息
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 11:49
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingOriginality()->CreativeRead()
    ->setAdvertiserId(ADVERTISER_ID)->setAdId('1625254884489223')->send();
var_dump($req->getBody());
