<?php

namespace Tool\QueryTool;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function dpaBehaviourAvailables()
    {
        return new DpaBehaviourAvailables($this->client);
    }

    public function dpaProductAvailables()
    {
        return new DpaProductAvailables($this->client);
    }

    public function adQualityGet()
    {
        return new ToolsAdQualityGet($this->client);
    }

    public function appSearch()
    {
        return new ToolsAppSearch($this->client);
    }

    public function bidSuggest()
    {
        return new ToolsBidSuggest($this->client);
    }

    public function estimateAudience()
    {
        return new ToolsEstimateAudience($this->client);
    }

    public function industryGet()
    {
        return new ToolsIndustryGet($this->client);
    }

    public function regionGet()
    {
        return new ToolsRegionGet($this->client);
    }
}