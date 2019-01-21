<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 12:07
 */

use  core\Autoloader\Autoloader;

require_once __DIR__ . '/../Autoloader/Autoloader.php';
define('ENABLE_HTTP_PROXY', false);
Autoloader::loadDirectories();
