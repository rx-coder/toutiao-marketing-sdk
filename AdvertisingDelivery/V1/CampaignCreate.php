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

class CampaignCreate extends RpcRequest
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
     * 广告组名称  长度为1-100个字符，其中1个中文字符算2位
     */
    private $campaign_name;

    /**
     * 广告组预算类型  允许值: "BUDGET_MODE_INFINITE","BUDGET_MODE_DAY"
     */
    private $budget_mode;

    /**
     * 可选
     * 广告组预算(当budget_mode=BUDGET_MODE_DAY时,必填,且日预算不少于1000元)
     * 取值范围: ≥ 0
     */
    private $budget;
}

