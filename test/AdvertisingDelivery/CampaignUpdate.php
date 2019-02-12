<?php
/**
 * 修改广告组
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:10
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingDelivery\V1\CampaignUpdate();
$req->setAdvertiserId(ADVERTISER_ID)->setCampaignId('1624068294022196')
    ->setCampaignName('新年快乐')->setModifyTime('b8206c9c26e11652fcf48b2584b6656f');
var_dump($client->excute($req)->getBody());
