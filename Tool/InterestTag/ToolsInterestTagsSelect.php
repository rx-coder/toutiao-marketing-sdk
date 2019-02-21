<?php
/**
 * 查询兴趣词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=134
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:50
 */

namespace Tool\InterestTag;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsInterestTagsSelect extends RpcRequest
{
    protected $url = '/2/tools/interest_tags/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}