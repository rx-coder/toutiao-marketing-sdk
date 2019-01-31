<?php
/**
 * 查询广告质量度
 * https://ad.toutiao.com/openapi/doc/index.html?id=149
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:07
 */

namespace Tool\QueryTool\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdQualityGet extends RpcRequest
{
    protected $url = '/2/tools/ad_quality/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 查询广告质量度
     * @var array $ad_ids
     */
    private $ad_ids;

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
    public function getAdIds()
    {
        return $this->ad_ids;
    }

    /**
     * @param array $ad_ids
     * @return $this
     */
    public function setAdIds($ad_ids)
    {
        $this->params["ad_ids"] = $ad_ids;
        $this->ad_ids = $ad_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id,'advertiser_id');
        RequestCheckUtil::checkNotNull($this->ad_ids, 'ad_ids');
    }
}