<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 17:25
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\InterestTag\V1\ToolsInterestTagsSelect();
$req->setAdvertiserId(ADVERTISER_ID);

print_r($client->excute($req));