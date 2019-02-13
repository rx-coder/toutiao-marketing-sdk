<?php
/**
 * 创建广告创意
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 10:05
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingOriginality\V1\CreativeCreate();
$req->setAdvertiserId(ADVERTISER_ID)->setAdId('1625254884489223')
    ->setInventoryType(['INVENTORY_FEED'])->setAdKeywords(['加油吧少年'])->setThirdIndustryId('19140604')
    ->setSource('来自火星')->setCreatives([["image_mode" => "CREATIVE_IMAGE_MODE_LARGE", "title" => "SDK尝试来来来",
        "image_ids" => ["web.business.image/201902135d0d8daf1329bb57402d8958"]]]);
var_dump($client->excute($req)->getBody());

