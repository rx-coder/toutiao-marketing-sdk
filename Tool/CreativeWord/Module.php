<?php

namespace Tool\CreativeWord;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function create()
    {
        return new ToolsCreativeWordCreate($this->client);
    }

    public function delete()
    {
        return new ToolsCreativeWordDelete($this->client);
    }

    public function select()
    {
        return new ToolsCreativeWordSelect($this->client);
    }

    public function update()
    {
        return new ToolsCreativeWordUpdate($this->client);
    }
}