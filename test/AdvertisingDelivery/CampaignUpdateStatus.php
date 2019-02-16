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
$req = $client::AdvertisingDelivery()->campaignUpdateStatus()
    ->setAdvertiserId(ADVERTISER_ID)->setCampaignIds(['1625434727234573', '1625437495707716'])
    ->setOptStatus('disable')->send();
var_dump($req->getBody());
