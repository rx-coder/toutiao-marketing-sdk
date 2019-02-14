<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/12
 * Time: 10:42
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Tool\PicToVideo\ToolsPicToVideoTaskCreate();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setTemplateType('images_vertical');
$req->setMusicName('6JCM5a6g.5Zyj6K-e5rGq5rGq5rGq77yB');
$req->setMapIdResource([
    "image1" => "http://sf6-ttcdn-tos.pstatp.com/obj/web.business.image/20180508fe69b5eed645736046bebd60",
]);
$req->setCallbackUrl(CALLBACK_URL);
print_r($client->excute($req));


