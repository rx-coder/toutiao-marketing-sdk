<?php
/**
 * 更新计划出价
 * 更新计划出价(也可使用update接口指定bid修改出价)
 * https://ad.toutiao.com/openapi/doc/index.html?id=62
 * User: zhangwenzong
 * Date: 2019/1/30
 * Time: 12:03
 */

namespace AdvertisingPlan\V1;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdUpdateBid extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/ad/update/bid/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 计划ID集合
     */
    private $ad_ids;

    /**
     * 出价
     */
    private $bid;

    /**
     * 批量修改，包含计划id和出价
     */
    private $data;

    /**
     * @param mixed $advertiser_id
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->advertiser_id = $advertiser_id;
    }

    /**
     * @param mixed $ad_ids
     */
    public function setAdIds($ad_ids)
    {
        $this->ad_ids = $ad_ids;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->ad_ids, 'ad_ids');
    }


}
