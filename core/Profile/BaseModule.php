<?php

namespace core\Profile;

use ToutiaoSdk\TouTiaoClient;

class BaseModule
{
    protected $client;

    public function __construct(TouTiaoClient $client)
    {
        $this->client = $client;
    }

}