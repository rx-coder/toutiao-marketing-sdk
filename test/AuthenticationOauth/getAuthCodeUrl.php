<?php
/**
 * 获取Authcode Url
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 16:19
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
print_r($auth->getAuthCodeUrl(CALLBACK_URL));
