<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 17:35
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingPlan\AdUpdateStatus();
$req->setAdvertiserId(ADVERTISER_ID)->setAdIds(['1624068174426120'])
    ->setOptStatus('disable');
var_dump($client->excute($req)->getBody());
