<?php
/**
 * 修改广告计划
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:31
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingPlan()->AdUpdate()->setAdvertiserId(ADVERTISER_ID)->setAdId('1624068174426120')
    ->setModifyTime('bc8a6786192292ebef6ea597dc1ffc57')->setName('加油青春')->send();
var_dump($req->getBody());

