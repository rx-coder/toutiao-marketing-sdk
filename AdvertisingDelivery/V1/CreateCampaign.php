<?php
/**
 * 创建广告组
 * https://ad.toutiao.com/openapi/doc/index.html?id=51
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
    protected $method = 'POST';
    protected $url = '/2/campaign/create/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 广告组名称，长度为1-100个字符，其中1个中文字符算2位
     */
    private $campaign_name;

}

