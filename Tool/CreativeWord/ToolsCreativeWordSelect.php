<?php
/**
 * 查询动态创意词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=101
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 14:19
 */

namespace Tool\CreativeWord;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsCreativeWordSelect extends RpcRequest
{
    protected $url = '/2/tools/creative_word/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 创意词包id列表，如不填默认返回所有创意词包
     * @var array $creative_word_ids
     */
    protected $creative_word_ids;

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
    public function getCreativeWordIds()
    {
        return $this->creative_word_ids;
    }

    /**
     * @param array $creative_word_ids
     * @return $this
     */
    public function setCreativeWordIds($creative_word_ids)
    {
        $this->params["creative_word_ids"] = $creative_word_ids;
        $this->creative_word_ids = $creative_word_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->creative_word_ids, 'creative_word_ids');
    }
}