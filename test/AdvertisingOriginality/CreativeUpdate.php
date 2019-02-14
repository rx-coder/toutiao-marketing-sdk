<?php
/**
 * 修改创意信息
 * User: zhangwenzong
 * Date: 2019/2/13
 * Time: 12:02
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingOriginality\CreativeUpdate();
$req->setAdvertiserId(ADVERTISER_ID)->setAdId('1625254884489223')
    ->setInventoryType(['INVENTORY_FEED'])
    ->setCreatives([["image_mode" => "CREATIVE_IMAGE_MODE_LARGE", "title" => "SDK尝试来来来",
        "image_ids" => ["web.business.image/201902135d0d8daf1329bb57402d8958"]]])
    ->setThirdIndustryId('19140604')->setSource('来自火星上')
    ->setModifyTime('c69dde2de8b19215a917e55bb79ad9c2')->setAdKeywords(['快乐米粉']);

var_dump($client->excute($req)->getBody());

