<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 11:19
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Dmp()->dataSourceUpdate();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setDataSourceId('067d127009514acfb2eb7b2f022ab7f4');
$req->setFileStorageType(0);
$req->setOperationType(1);
$req->setFilePaths(['109089600186-740a59aee9e9710e85aa71d5e749e73b']);
print_r($client->excute($req));
