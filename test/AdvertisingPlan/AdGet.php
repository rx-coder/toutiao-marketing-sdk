<?php
/**
 * 获取广告计划
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:23
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingPlan\V1\AdGet();
$req->setAdvertiserId('109089600186');
var_dump($client->excute($req)->getBody());
