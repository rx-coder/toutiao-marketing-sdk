<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 11:15
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\File\FileImageAdGet();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setImageIds(['web.business.image/201901315d0d9323af335d944065b39c']);

print_r($client->excute($req));