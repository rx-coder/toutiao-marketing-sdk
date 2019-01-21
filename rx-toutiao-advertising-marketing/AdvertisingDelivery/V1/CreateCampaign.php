<?php
/**
 * 创建广告组
 * User: zhangwenzong
 * Date: 2019/1/18
 * Time: 15:07
 */
namespace AdvertisingDelivery\V1;
use core\Profile\RequestInteface;

class CreateCampaign implements RequestInteface
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = 'https://ad.toutiao.com/open_api/2/campaign/create/';

    public function getMethod()
    {
        return $this->method;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

