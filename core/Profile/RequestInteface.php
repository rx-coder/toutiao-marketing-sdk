<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/21
 * Time: 11:55
 */

namespace core\Profile;

interface RequestInteface
{
    public function getUrl();

    public function setUrl($url);

    public function getMethod();

    public function setParams($array);

    public function getParams();

    public function addParam($key, $value);

    public function getContentType();

    public function check();
}