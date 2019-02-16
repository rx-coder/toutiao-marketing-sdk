<?php

namespace core\Profile;

class BaseModule
{
    /**
     * @var TouTiaoClient
     */
    protected $client;

    public function __construct(TouTiaoClient $client)
    {
        $this->client = $client;
    }

}