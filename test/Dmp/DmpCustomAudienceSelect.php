<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 12:07
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Dmp\DmpCustomAudienceSelect();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setSelectType(0);

print_r($client->excute($req));