<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 11:50
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Dmp()->dataSourceRead();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setDataSourceIdList(['067d127009514acfb2eb7b2f022ab7f4']);

print_r($client->excute($req));