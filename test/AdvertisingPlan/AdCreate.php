<?php
/**
 * 创建广告计划
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 16:16
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingPlan\V1\AdCreate();
$req->setAdvertiserId(ADVERTISER_ID)->setCampaignId('1623961859341342')
    ->setBudgetMode('BUDGET_MODE_DAY')->setStartTime('2019-01-30 00:00')
    ->setEndTime('2019-01-31 00:00')->setScheduleType('SCHEDULE_FROM_NOW')
    ->setBudget('300')->setBid('30')->setPricing('PRICING_CPC')
    ->setScheduleType('SCHEDULE_FROM_NOW')->setFlowControlMode('FLOW_CONTROL_MODE_FAST')
    ->setExternalUrl('https://itunes.apple.com/cn/app/id1424014967?mt=8')
    ->setName('SDK创建的---zhangwenzong123')->setPackage('zwz');
var_dump($client->excute($req)->getBody());
