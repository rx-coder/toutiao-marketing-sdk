<?php
/**
 * 查询DPA可用类型
 * https://ad.toutiao.com/openapi/doc/index.html?id=109
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 15:35
 */

namespace Tool\QueryTool\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DpaBehaviourAvailables extends RpcRequest
{
    protected $url = '/2/dpa/behaviour/availables/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    private $advertiser_id;

    /**
     * 平台id
     * @var string $platform_id
     */
    private $platform_id;

    /**
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param string $advertiser_id
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
    public function getPlatformId()
    {
        return $this->platform_id;
    }

    /**
     * @param string $platform_id
     * @return $this
     */
    public function setPlatformId($platform_id)
    {
        $this->params["platform_id"] = $platform_id;
        $this->platform_id = $platform_id;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->platform_id, 'platform_id');
    }
}