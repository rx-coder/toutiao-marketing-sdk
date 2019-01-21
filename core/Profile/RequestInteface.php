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
    public function getMethod();
}