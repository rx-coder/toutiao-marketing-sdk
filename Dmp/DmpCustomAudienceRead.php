<?php
/**
 * 人群包详细信息
 * https://ad.toutiao.com/openapi/doc/index.html?id=242
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 12:11
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudienceRead extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/read/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var  int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 人群包ID列表 长度取值范围: 1-100
     * @var array $custom_audience_ids
     */
    protected $custom_audience_ids;

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
    public function getCustomAudienceIds()
    {
        return $this->custom_audience_ids;
    }

    /**
     * @param array $custom_audience_ids
     * @return $this
     */
    public function setCustomAudienceIds($custom_audience_ids)
    {
        $this->params["custom_audience_ids"] = $custom_audience_ids;
        $this->custom_audience_ids = $custom_audience_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->custom_audience_ids, 'custom_audience_ids');
    }
}