<?php
/**
 * 更新计划预算
 * 广告更新预算(也可使用update接口指定budget修改预算)
 * https://ad.toutiao.com/openapi/doc/index.html?id=61
 * User: zhangwenzong
 * Date: 2019/1/30
 * Time: 11:44
 */

namespace AdvertisingPlan\V1;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdUpdateBudget extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/ad/update/budget/';
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
     * 预算
     */
    private $budget;

    /**
     * 批量修改预算，包含计划ID和预算
     */
    private $data;

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
     * @param mixed $ad_id
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->params['ad_id'] = $ad_id;
        $this->ad_id = $ad_id;
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
     * @param mixed $data
     * @return $this
     */
    public function setData($data)
    {
        $this->params['data'] = $data;
        $this->data = $data;
        return $this;
    }

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {
     //   RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
      //  RequestCheckUtil::checkNotNull($this->ad_id, 'ad_id');
    }


}
