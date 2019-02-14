<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 16:13
 */
require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Report\ReportAgentGet();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setStartDate('2019-01-29');
$req->setEndDate('2019-01-29');
$req->setGroupBy(["STAT_GROUP_BY_FIELD_STAT_TIME", "STAT_GROUP_BY_FIELD_ID"]);

print_r($client->excute($req));