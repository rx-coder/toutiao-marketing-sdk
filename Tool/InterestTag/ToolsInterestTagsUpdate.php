<?php
/**
 * 更新兴趣词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=136
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:57
 */

namespace Tool\InterestTag;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsInterestTagsUpdate extends RpcRequest
{
    protected $url = '/2/tools/interest_tags/update/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主id
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 兴趣词包id
     * @var int $id
     */
    protected $id;

    /**
     * 兴趣词包名称
     * @var string $name
     */
    protected $name;

    /**
     * 兴趣词包具体内容
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->params["id"] = $id;
        $this->id = $id;
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
        RequestCheckUtil::checkNotNull($this->id, 'id');
        RequestCheckUtil::checkNotNull($this->name, 'name');
        RequestCheckUtil::checkNotNull($this->words, 'words');
    }
}