<?php
/**
 * 创建广告组
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:07
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingDelivery\V1\CampaignCreate();
$req->setAdvertiserId(ADVERTISER_ID)->setCampaignName('开年咯')
    ->setBudgetMode('BUDGET_MODE_INFINITE')->setLandingType('LINK');
var_dump($client->excute($req)->getBody());

