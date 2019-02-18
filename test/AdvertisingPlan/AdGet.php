<?php
/**
 * 获取广告计划
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:23
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingPlan()->AdGet()->setAdvertiserId('109089600186')->send();
var_dump($req->getBody());
