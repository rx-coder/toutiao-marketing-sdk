<?php

namespace Report;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function adGet()
    {
        return new ReportAdGet($this->client);
    }

    public function advertiserGet()
    {
        return new ReportAdvertiserGet($this->client);
    }

    public function agentGet()
    {
        return new ReportAgentGet($this->client);
    }

    public function audienceAge()
    {
        return new ReportAudienceAge($this->client);
    }

    public function audienceCity()
    {
        return new ReportAudienceCity($this->client);
    }

    public function audienceGender()
    {
        return new ReportAudienceGender($this->client);
    }

    public function audienceProvince()
    {
        return new ReportAudienceProvince($this->client);
    }

    public function audienceTag()
    {
        return new ReportAudienceTag($this->client);
    }

    public function campaignGet()
    {
        return new ReportCampaignGet($this->client);
    }

    public function creativeGet()
    {
        return new ReportCreativeGet($this->client);
    }
}
