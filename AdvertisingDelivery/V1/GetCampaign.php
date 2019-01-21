<?php
/**
 * 获取广告组
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 14:28
 */

namespace AdvertisingDelivery\V1;
use core\Profile\RequestInteface;

class GetCampaign implements RequestInteface
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://ad.toutiao.com/open_api/2/campaign/get/';

    public function getMethod()
    {
        return $this->method;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
