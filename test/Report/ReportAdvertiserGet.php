<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 16:08
 */
require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Report()->advertiserGet();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setStartDate('2019-01-29');
$req->setEndDate('2019-01-29');

print_r($client->excute($req));