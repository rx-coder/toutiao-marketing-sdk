<?php
/**
 * demo使用案例
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 12:08
 */

require_once './core/Config/main.php';

$app_id = '';
$secret = '';

$auth = new \core\Profile\ToutiaoAuth($app_id, $secret);

//print_r($auth->getAuthCodeUrl("http://passion.haolints.com/"));
//echo PHP_EOL;

//print_r($auth->getAccessToken(''));


print_r($auth->refreshToken(''));


$client = $auth->makeClient('');
$req = new \AdvertisingDelivery\V1\GetCampaign();
var_dump($client->excute($req));

exit();