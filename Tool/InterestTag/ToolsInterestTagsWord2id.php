<?php
/**
 * 兴趣关键词词转ID
 * https://ad.toutiao.com/openapi/doc/index.html?id=139
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 17:35
 */

namespace Tool\InterestTag;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsInterestTagsWord2id extends RpcRequest
{
    protected $url = '/2/tools/interest_tags/word2id/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主id
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 兴趣关键词
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
        RequestCheckUtil::checkNotNull($this->words, 'words');
    }
}