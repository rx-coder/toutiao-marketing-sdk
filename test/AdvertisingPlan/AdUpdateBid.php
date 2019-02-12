<?php
/**
 * 更新计划出价
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:46
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingPlan\V1\AdUpdateBid();
//方式一：
$req->setAdvertiserId(ADVERTISER_ID)->setData([['ad_id' => '1624073474955267', 'bid' => 88]]);
//方式二：
$req->setAdvertiserId(ADVERTISER_ID)->setAdIds(['1624073474955267'])->setBid('88');
var_dump($client->excute($req)->getBody());

