<?php
/**
 * 更新计划状态
 * 通过此接口可对计划做启用/暂停/删除操作。
 * https://ad.toutiao.com/openapi/doc/index.html?id=60
 * User: zhangwenzong
 * Date: 2019/1/30
 * Time: 11:18
 */

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/ad/update/status/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * 计划ID集合
     */
    protected $ad_ids;

    /**
     * 操作
     *  "enable"表示启用, "delete"表示删除, "disable"表示暂停
     * 允许值: "enable", "delete", "disable"
     */
    protected $opt_status;

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
     * @param mixed $ad_ids
     * @return $this
     */
    public function setAdIds(array $ad_ids)
    {
        $this->params['ad_ids'] = $ad_ids;
        $this->ad_ids = $ad_ids;
        return $this;
    }

    /**
     * @param mixed $opt_status
     * @return $this
     */
    public function setOptStatus($opt_status)
    {
        $this->params['opt_status'] = $opt_status;
        $this->opt_status = $opt_status;
        return $this;
    }

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {
       /* RequestCheckUtil::checkAllowField($this->opt_status, ["enable", "delete", "disable"], 'opt_status');*/
    }
}
