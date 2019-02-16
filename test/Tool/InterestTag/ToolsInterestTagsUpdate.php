<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 17:52
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Tool()->interestTag->update();

$req->setAdvertiserId(ADVERTISER_ID);
$req->setId(1624253825408027);
$req->setWords(['天天']);
$req->setName('测恶');

print_r($client->excute($req));