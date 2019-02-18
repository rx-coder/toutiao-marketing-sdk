<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 16:16
 */
require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Report()->audienceTag();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setStartDate('2019-01-29');
$req->setEndDate('2019-01-29');
$req->setIdType("AUDIENCE_STAT_ID_TYPE_ADVERTISER");
$req->setMetrics(["cost"]);

print_r($client->excute($req));