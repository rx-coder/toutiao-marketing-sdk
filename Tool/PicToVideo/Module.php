<?php

namespace Tool\PicToVideo;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function musicGet()
    {
        return new ToolsPicToVideoMusicGet($this->client);
    }

    public function statusGet()
    {
        return new ToolsPicToVideoStatusGet($this->client);
    }

    public function taskCreate()
    {
        return new ToolsPicToVideoTaskCreate($this->client);
    }

    public function taskCallback()
    {
        return new ToolsVideoTaskCallback($this->client);
    }
}