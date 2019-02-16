<?php

namespace Dmp;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function customAudienceSelect()
    {
        return new DmpCustomAudienceSelect($this->client);
    }

    public function customAudienceRead()
    {
        return new DmpCustomAudienceRead($this->client);
    }

    public function customAudienceRule()
    {
        return new DmpCustomAudienceRule($this->client);
    }

    public function customAudiencePushV2()
    {
        return new DmpCustomAudiencePushV2($this->client);
    }

    public function customAudiencePublish()
    {
        return new DmpCustomAudiencePublish($this->client);
    }

    public function customAudienceLookalike()
    {
        return new DmpCustomAudienceLookalike($this->client);
    }

    public function customAudienceDelete()
    {
        return new DmpCustomAudienceDelete($this->client);
    }

    public function dataSourceCreate()
    {
        return new DmpDataSourceCreate($this->client);
    }

    public function dataSourceRead()
    {
        return new DmpDataSourceRead($this->client);
    }

    public function dataSourceFileUpload()
    {
        return new DmpDataSourceFileUpload($this->client);
    }

    public function dataSourceUpdate()
    {
        return new DmpDataSourceUpdate($this->client);
    }
}