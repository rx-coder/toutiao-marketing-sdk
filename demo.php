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


//1、获得auth_code的url地址
/*$client = new core\Profile\TouTiaoClient($app_id, $secret);
print_r($client->getAuthCodeUrl());*/

//2、获取access_token
/*$client = new core\Profile\TouTiaoClient($app_id, $secret);
$client->setParams([
        'auth_code' => '261247d4e1eadb6b9cc6f95192c1c63e0ffc50b2']
);
print_r($client->getAccessToken());*/

//3、刷新access_token
/*$client = new core\Profile\TouTiaoClient($app_id, $secret);
$client->setParams([
        'refresh_token' => '0473ef8683eb3423f873b058e47099a1a0285fd5']
);
print_r($client->refreshToken());*/

//4、获取广告组
/*$client->setParams(['advertiser_id' => '109089600186']);
$client->setHeaders([
        'Content-Type' => 'application/json',
        'Access-Token' => '8375d01f4dd43d50e4cbc2a308b05e70968f5638']
);
print_r($client->getCampaign());*/
exit();