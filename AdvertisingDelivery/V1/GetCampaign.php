<?php
/**
 * 获取广告组
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 14:28
 */

namespace AdvertisingDelivery\V1;

use core\Profile\RpcRequest;

class GetCampaign extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/campaign/get/';
}
