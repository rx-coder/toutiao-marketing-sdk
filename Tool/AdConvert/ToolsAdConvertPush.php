<?php
/**
 * 转化ID推送
 * https://ad.toutiao.com/openapi/doc/index.html?id=177
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 10:16
 */

namespace Tool\AdConvert;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdConvertPush extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/push/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 转化id
     * @var int $convert_id
     */
    private $convert_id;

    /**
     * 推送的广告主ID列表
     * @var array $target_advertiser_ids
     */
    private $target_advertiser_ids;

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
    public function getConvertId()
    {
        return $this->convert_id;
    }

    /**
     * @param int $convert_id
     * @return $this
     */
    public function setConvertId($convert_id)
    {
        $this->params["convert_id"] = $convert_id;
        $this->convert_id = $convert_id;
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
        RequestCheckUtil::checkNotNull($this->convert_id, 'convert_id');
        RequestCheckUtil::checkNotNull($this->target_advertiser_ids, 'target_advertiser_ids');
    }
}