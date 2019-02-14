<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/2/14
 * Time: 17:05
 */

namespace AdvertisingOriginality;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function creativeCreate()
    {
        return new CreativeCreate($this->client);
    }

    public function creativeGet()
    {
        return new CreativeGet($this->client);
    }

    public function creativeMaterialRead()
    {
        return new CreativeMaterialRead($this->client);
    }

    public function creativeRead()
    {
        return new CreativeRead($this->client);
    }

    public function creativeUpdate()
    {
        return new CreativeUpdate($this->client);
    }

    public function creativeUpdateStatus()
    {
        return new CreativeUpdateStatus($this->client);
    }
}