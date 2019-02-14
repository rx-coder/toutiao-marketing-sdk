<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 18:03
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\InterestTag\ToolsInterestTagsId2word();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setWordIds([8523986]);

print_r($client->excute($req));

