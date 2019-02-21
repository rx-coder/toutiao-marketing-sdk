<?php
/**
 * 删除动态创意词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=99
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 12:15
 */

namespace Tool\CreativeWord;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsCreativeWordDelete extends RpcRequest
{
    protected $url = '/2/tools/creative_word/delete/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 创意词包ID
     * @var int $creative_word_id
     */
    protected $creative_word_id;

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
    public function getCreativeWordId()
    {
        return $this->creative_word_id;
    }

    /**
     * @param int $creative_word_id
     * @return $this
     */
    public function setCreativeWordId($creative_word_id)
    {
        $this->params["creative_word_id"] = $creative_word_id;
        $this->creative_word_id = $creative_word_id;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->creative_word_id, 'creative_word_id');
    }
}