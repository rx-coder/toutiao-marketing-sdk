<?php
/**
 * 兴趣关键词ID转词
 * https://ad.toutiao.com/openapi/doc/index.html?id=138
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 17:31
 */

namespace Tool\InterestTag;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsInterestTagsId2word extends RpcRequest
{
    protected $url = '/2/tools/interest_tags/id2word/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 兴趣关键词id
     * @var array $word_ids
     */
    protected $word_ids;

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
    public function getWordIds()
    {
        return $this->word_ids;
    }

    /**
     * @param array $word_ids
     * @return $this
     */
    public function setWordIds($word_ids)
    {
        $this->params["word_ids"] = $word_ids;
        $this->word_ids = $word_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->word_ids, 'word_ids');
    }
}