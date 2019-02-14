<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 16:01
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Dmp\DmpCustomAudienceDelete();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setCustomAudienceId('110206648');

print_r($client->excute($req));