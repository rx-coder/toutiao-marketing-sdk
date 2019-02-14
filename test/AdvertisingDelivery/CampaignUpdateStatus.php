<?php
/**
 * 广告组更新状态
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:13
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingDelivery\CampaignUpdateStatus();
$req->setAdvertiserId(ADVERTISER_ID)->setCampaignIds(['1623961859341342', '1624068294022196'])
    ->setOptStatus('disable');
var_dump($client->excute($req)->getBody());
