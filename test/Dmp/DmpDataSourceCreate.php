<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 11:04
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Dmp()->dataSourceCreate();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setDataFormat(0);
$req->setDataSourceName('测试');
$req->setDescription('这是api测试');
$req->setFileStorageType('0');
$req->setFilePaths(['109089600186-740a59aee9e9710e85aa71d5e749e73b']);

print_r($client->excute($req));
