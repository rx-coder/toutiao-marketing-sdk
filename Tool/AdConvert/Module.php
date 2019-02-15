<?php

namespace Tool\AdConvert;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function create()
    {
        return new ToolsAdConvertCreate($this->client);
    }

    public function push()
    {
        return new ToolsAdConvertPush($this->client);
    }

    public function read()
    {
        return new ToolsAdConvertRead($this->client);
    }

    public function select()
    {
        return new ToolsAdConvertSelect($this->client);
    }

    public function update()
    {
        return new ToolsAdConvertUpdate($this->client);
    }

    public function updateStatus()
    {
        return new ToolsAdConvertUpdateStatus($this->client);
    }

    public function advConvertSelect()
    {
        return new ToolsAdvConvertSelect($this->client);
    }

}