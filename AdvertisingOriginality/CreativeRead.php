<?php
/**
 * 创意详细信息
 * https://ad.toutiao.com/open_api/2/creative/read_v2/
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 14:40
 */
namespace AdvertisingOriginality;

use core\Profile\RpcRequest;

class CreativeRead extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/creative/read_v2/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 计划ID
     */
    private $ad_id;

    /**
     * @param mixed $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @param mixed $ad_id
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->params["ad_id"] = $ad_id;
        $this->ad_id = $ad_id;
        return $this;
    }
}
