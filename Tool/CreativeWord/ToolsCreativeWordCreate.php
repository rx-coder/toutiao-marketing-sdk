<?php
/**
 * 创建动态创意词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=98
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 12:00
 */

namespace Tool\CreativeWord;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsCreativeWordCreate extends RpcRequest
{
    protected $url = '/2/tools/creative_word/create/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 创意词包名称
     * @var string $name
     */
    protected $name;

    /**
     * 默认词
     * @var string $default_word
     */
    protected $default_word;

    /**
     * 替换词
     * @var array $words
     */
    protected $words;

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->params["name"] = $name;
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultWord()
    {
        return $this->default_word;
    }

    /**
     * @param string $default_word
     * @return $this
     */
    public function setDefaultWord($default_word)
    {
        $this->params["default_word"] = $default_word;
        $this->default_word = $default_word;
        return $this;
    }

    /**
     * @return array
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param array $words
     * @return $this
     */
    public function setWords($words)
    {
        $this->params["words"] = $words;
        $this->words = $words;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->name, 'name');
        RequestCheckUtil::checkNotNull($this->default_word, 'default_word');
        RequestCheckUtil::checkNotNull($this->words, 'words');
    }
}