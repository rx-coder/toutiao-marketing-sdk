<?php
/**
 * 修改广告组
 * 修改广告组信息，可更改内容包括广告组名称、预算类型及预算，除此之外其他内容不允许修改。
 * https://ad.toutiao.com/openapi/doc/index.html?id=53
 * User: zhangwenzong
 * Date: 2019/1/18
 * Time: 15:07
 */

namespace AdvertisingDelivery;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class CampaignUpdate extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/campaign/update/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * 广告组ID
     */
    protected $campaign_id;

    /**
     * (可选)
     * 广告组名称  长度为1-100个字符，其中1个中文字符算2位
     */
    protected $campaign_name;

    /**
     * 时间戳,从read接口得到,用于判断是否基于最新信息修改
     */
    protected $modify_time;

    /**
     * (可选)
     * 广告组预算类型  允许值: "BUDGET_MODE_INFINITE","BUDGET_MODE_DAY"
     */
    protected $budget_mode;

    /**
     * (可选)
     * 广告组预算(当budget_mode=BUDGET_MODE_DAY时,必填,且日预算不少于1000元)
     * 取值范围: ≥ 0
     */
    protected $budget;


    /**
     * @param mixed $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params['advertiser_id'] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @param mixed $budget_mode
     * @return $this
     */
    public function setBudgetMode($budget_mode)
    {
        $this->params['budget_mode'] = $budget_mode;
        $this->budget_mode = $budget_mode;
        return $this;
    }

    /**
     * @param mixed $budget
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->params['budget'] = $budget;
        $this->budget = $budget;
        return $this;
    }

    /**
     * @param mixed $campaign_id
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->params['campaign_id'] = $campaign_id;
        $this->campaign_id = $campaign_id;
        return $this;
    }

    /**
     * @param mixed $campaign_name
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->params['campaign_name'] = $campaign_name;
        $this->campaign_name = $campaign_name;
        return $this;
    }

    /**
     * @param mixed $modify_time
     * @return $this
     */
    public function setModifyTime($modify_time)
    {
        $this->params['modify_time'] = $modify_time;
        $this->modify_time = $modify_time;
        return $this;
    }


    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkAllowField($this->budget_mode, ['BUDGET_MODE_INFINITE', 'BUDGET_MODE_DAY'], 'budget_mode');
    }


}

