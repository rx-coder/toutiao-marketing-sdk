<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 17:35
 */
require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';


$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
print_r($auth->refreshToken(REFRESH_TOKEN));
