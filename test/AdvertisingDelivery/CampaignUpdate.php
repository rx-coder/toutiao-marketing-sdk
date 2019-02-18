<?php
/**
 * 修改广告组
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:10
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingDelivery()->campaignUpdate()->setAdvertiserId(ADVERTISER_ID)->setCampaignId('1625437495707716')
    ->setCampaignName('新年快乐哦哦')->setModifyTime('9e7ccf2a59cd845733824e6c804c37c9')->send();
var_dump($req->getBody());
