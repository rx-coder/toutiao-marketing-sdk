<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/12
 * Time: 12:22
 */

require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Tool\ToolsSiteGet();
$req->setAdvertiserId(ADVERTISER_ID);

print_r($client->excute($req));