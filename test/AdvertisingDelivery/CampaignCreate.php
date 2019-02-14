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
$req = $client::AdvertisingDelivery()->campaignCreate()->setAdvertiserId(ADVERTISER_ID)->setCampaignName('开年咯快乐天天')
    ->setBudgetMode('BUDGET_MODE_INFINITE')->setLandingType('LINK')->send();
var_dump($req->getBody());

