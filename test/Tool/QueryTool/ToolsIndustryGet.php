<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:37
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = $client::Tool()->queryTool->industryGet();
$req->setLevel(2);
print_r($client->excute($req));