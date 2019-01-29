<?php
/**
 * demo使用案例
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 12:08
 */

require_once './index.php';

$app_id = '';
$secret = '';

$auth = new \core\Profile\ToutiaoAuth($app_id, $secret);

//案例1:获取Authcode Url
//print_r($auth->getAuthCodeUrl("http://passion.haolints.com/"));

//案例2:获取token
//print_r($auth->getAccessToken(''));

//案例3:获取广告组
/*$client = $auth->makeClient('');
$req = new \AdvertisingDelivery\V1\CampaignGet();
$req->setAdvertiserId('');
var_dump($client->excute($req)->getBody());*/


//案例4:创建广告组
/*$client = $auth->makeClient('');
$req = new \AdvertisingDelivery\V1\CampaignCreate();
$req->setAdvertiserId('')->setCampaignName('')->setBudgetMode('')->setLandingType('');
var_dump($client->excute($req)->getBody());*/


//案例5:修改广告组
$client = $auth->makeClient('');
$req = new \AdvertisingDelivery\V1\CampaignUpdate();
$req->setAdvertiserId('')->setCampaignId('')->setCampaignName('')->setModifyTime('');
var_dump($client->excute($req)->getBody());