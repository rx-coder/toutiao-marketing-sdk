<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 18:07
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = $client::Tool()->interestTag->word2Id();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setWords(['我']);

print_r($client->excute($req));