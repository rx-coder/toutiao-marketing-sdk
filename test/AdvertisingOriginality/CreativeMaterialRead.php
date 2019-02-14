<?php
/**
 * 创意素材信息
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 14:15
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingOriginality\CreativeMaterialRead();
$req->setAdvertiserId(ADVERTISER_ID)
    ->setCreativeIds(['1625331325456445'])
    ->setFields(["id", "ad_id", "title"]);
var_dump($client->excute($req)->getBody());
