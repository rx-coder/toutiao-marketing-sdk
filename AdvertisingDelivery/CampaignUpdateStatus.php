<?php
/**
 * 广告组更新状态
 * 通过此接口可对广告组做启用/暂停/删除操作。
 * https://ad.toutiao.com/openapi/doc/index.html?id=53
 * User: zhangwenzong
 * Date: 2019/1/29
 * Time: 11:50
 */

namespace AdvertisingDelivery;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class CampaignUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/campaign/update/status/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 广告组ID集合
     */
    private $campaign_ids;

    /**
     * 操作, "enable"表示启用, "delete"表示删除, "disable"表示暂停
     * 允许值: "enable", "delete", "disable"
     */
    private $opt_status;

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
     * @param mixed $campaign_ids
     * @return $this
     */
    public function setCampaignIds($campaign_ids)
    {
        $this->params['campaign_ids'] = $campaign_ids;
        $this->campaign_ids = $campaign_ids;
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
        RequestCheckUtil::checkAllowField($this->opt_status, ['enable', 'delete', 'disable'], 'opt_status');
    }


}

