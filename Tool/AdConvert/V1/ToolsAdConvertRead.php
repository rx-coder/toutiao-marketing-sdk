<?php
/**
 * 查询转化详细信息
 * https://ad.toutiao.com/openapi/doc/index.html?id=211
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 10:02
 */

namespace Tool\AdConvert\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdConvertRead extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/read/';
    protected $method = 'GET';
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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->convert_id, 'convert_id');
    }
}