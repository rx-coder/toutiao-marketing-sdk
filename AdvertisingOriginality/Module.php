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
    public function CreativeCreate()
    {
        return new CreativeCreate($this->client);
    }

    public function CreativeGet()
    {
        return new CreativeGet($this->client);
    }

    public function CreativeMaterialRead()
    {
        return new CreativeMaterialRead($this->client);
    }

    public function CreativeRead()
    {
        return new CreativeRead($this->client);
    }

    public function CreativeUpdate()
    {
        return new CreativeUpdate($this->client);
    }

    public function CreativeUpdateStatus()
    {
        return new CreativeUpdateStatus($this->client);
    }
}