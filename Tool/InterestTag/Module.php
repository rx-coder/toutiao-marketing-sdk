<?php

namespace Tool\InterestTag;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function create()
    {
        return new ToolsInterestTagsCreate($this->client);
    }

    public function delete()
    {
        return new ToolsInterestTagsDelete($this->client);
    }

    public function id2word()
    {
        return new ToolsInterestTagsId2word($this->client);
    }

    public function word2Id()
    {
        return new ToolsInterestTagsWord2id($this->client);
    }

    public function select()
    {
        return new ToolsInterestTagsSelect($this->client);
    }

    public function update()
    {
        return new ToolsInterestTagsUpdate($this->client);
    }
}