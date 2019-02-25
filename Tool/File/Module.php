<?php

namespace Tool\File;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function imageGet()
    {
        return new FileImageGet($this->client);
    }

    public function imageAd()
    {
        return new FileImageAd($this->client);
    }

    public function imageAdGet()
    {
        return new FileImageAdGet($this->client);
    }

    public function imageAdvertiser()
    {
        return new FileImageAdvertiser($this->client);
    }

    public function videoGet()
    {
        return new FileVideoGet($this->client);
    }

    public function videoAd()
    {
        return new FileVideoAd($this->client);
    }

    public function videoAdGet()
    {
        return new FileVideoAdGet($this->client);
    }

    public function videoCoverSuggest()
    {
        return new ToolsVideoCoverSuggest($this->client);
    }
}