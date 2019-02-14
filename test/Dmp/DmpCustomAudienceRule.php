<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 17:36
 */

require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Dmp\DmpCustomAudienceRule();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setTag('sdfwe');
$req->setName('测测测恶');
$req->setProfileType('DPA');
$req->setProfiles([[
    "behavior_code" => '1006', "days" => "28", 'dpa_id' => '999'
]]);
print_r($client->excute($req));