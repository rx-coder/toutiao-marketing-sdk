<?php
/**
 * 更新计划预算
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:37
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingPlan()->AdUpdateBudget()->setAdvertiserId(ADVERTISER_ID)
    ->setData([['ad_id' => '1624073474955267', 'budget' => 155]])->send();//注意是二维
var_dump($req->getBody());
