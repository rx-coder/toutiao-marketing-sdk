<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:35
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingPlan()->AdUpdateStatus()
    ->setAdvertiserId(ADVERTISER_ID)->setAdIds(['1624068174426120'])
    ->setOptStatus('disable')->send();
var_dump($req->getBody());
