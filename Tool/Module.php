<?php

namespace Tool;

use core\Exception\TouTiaoException;
use core\Profile\BaseModule;

/**
 * Class Module
 * @package Tool
 *
 * @property \Tool\AdConvert\Module $adConvert
 * @property  \Tool\CreativeWord\Module $creativeWord
 * @property  \Tool\File\Module $file
 * @property  \Tool\InterestTag\Module $interestTag
 * @property  \Tool\PicToVideo\Module $picToVideo
 * @property  \Tool\QueryTool\Module $queryTool
 */
class Module extends BaseModule
{
    private $providers = [
        'adConvert' => \Tool\AdConvert\Module::class,
        'creativeWord' => \Tool\CreativeWord\Module::class,
        'file' => \Tool\File\Module::class,
        'interestTag' => \Tool\InterestTag\Module::class,
        'picToVideo' => \Tool\PicToVideo\Module::class,
        'queryTool' => \Tool\QueryTool\Module::class,
    ];

    /**
     * @param $name
     * @return mixed
     * @throws TouTiaoException
     */
    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            if (array_key_exists($name, $this->providers)) {
                return new $this->providers[$name]($this->client);
            }
            throw new TouTiaoException("Undefind property $name", 500);
        }
        return $this->$name;
    }

    public function siteGet()
    {
        return new ToolsSiteGet($this->client);
    }
}