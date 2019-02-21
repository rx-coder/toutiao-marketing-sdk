<?php
/**
 * 推送人群包（新版）
 * https://ad.toutiao.com/openapi/doc/index.html?id=237
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 15:32
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudiencePushV2 extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/push_v2/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 人群包所属广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 人群包ID
     * @var int $custom_audience_id
     */
    protected $custom_audience_id;

    /**
     * 推送广告主ID列表
     * @var array $target_advertiser_ids
     */
    protected $target_advertiser_ids;

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomAudienceId()
    {
        return $this->custom_audience_id;
    }

    /**
     * @param int $custom_audience_id
     * @return $this
     */
    public function setCustomAudienceId($custom_audience_id)
    {
        $this->params["custom_audience_id"] = $custom_audience_id;
        $this->custom_audience_id = $custom_audience_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getTargetAdvertiserIds()
    {
        return $this->target_advertiser_ids;
    }

    /**
     * @param array $target_advertiser_ids
     * @return $this
     */
    public function setTargetAdvertiserIds($target_advertiser_ids)
    {
        $this->params["target_advertiser_ids"] = $target_advertiser_ids;
        $this->target_advertiser_ids = $target_advertiser_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->custom_audience_id, 'custom_audience_id');
        RequestCheckUtil::checkNotNull($this->target_advertiser_ids, 'target_advertiser_ids');
    }
}
