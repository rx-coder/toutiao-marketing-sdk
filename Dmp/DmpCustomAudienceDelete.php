<?php
/**
 * 删除人群包
 * https://ad.toutiao.com/openapi/doc/index.html?id=79
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 15:56
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudienceDelete extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/delete/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 人群包ID
     * @var int $custom_audience_id
     */
    private $custom_audience_id;

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
    public function getCustomAudienceId()
    {
        return $this->custom_audience_id;
    }

    /**
     * @param int $custom_audience_id
     * @return $this
     */
    public function setCustomAudienceId($custom_audience_id)
    {
        $this->params["custom_audience_id"] = $custom_audience_id;
        $this->custom_audience_id = $custom_audience_id;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->custom_audience_id, 'custom_audience_id');
    }
}