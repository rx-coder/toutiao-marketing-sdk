<?php
/**
 * 创建广告组
 * User: zhangwenzong
 * Date: 2019/1/18
 * Time: 15:07
 */
namespace AdvertisingDelivery\V1;
use core\Profile\RpcRequest;

class CreateCampaign extends RpcRequest
{
    /**
     * @var string
     */
    private $method = 'POST';
    private $url = 'https://ad.toutiao.com/open_api/2/campaign/create/';
}

