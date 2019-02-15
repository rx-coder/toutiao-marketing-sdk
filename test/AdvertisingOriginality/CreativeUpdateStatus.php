<?php
/**
 * 更新创意状态
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 14:11
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingOriginality()->CreativeUpdateStatus()->setAdvertiserId(ADVERTISER_ID)
    ->setCreativeIds(['1625331325456445'])
    ->setOptStatus('disable')->send();
var_dump($req->getBody());
