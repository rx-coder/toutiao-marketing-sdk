<?php
/**
 * 更新转化状态
 * https://ad.toutiao.com/openapi/doc/index.html?id=210
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 18:04
 */

namespace Tool\AdConvert\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdConvertUpdateStatus extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/update_status/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 转化ID
     * @var int $convert_id
     */
    private $convert_id;

    /**
     * 操作状态，详见【附录-操作状态】, 允许值：
     * "AD_CONVERT_OPT_STATUS_ENABLE",
     * "AD_CONVERT_OPT_STATUS_DISABLE",
     * "AD_CONVERT_OPT_STATUS_PAUSE"
     *
     * @var string $opt_status
     */
    private $opt_status;

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
     * @return string
     */
    public function getOptStatus()
    {
        return $this->opt_status;
    }

    /**
     * @param string $opt_status
     * @return $this
     */
    public function setOptStatus($opt_status)
    {
        $this->params["opt_status"] = $opt_status;
        $this->opt_status = $opt_status;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->convert_id, 'convert_id');
        RequestCheckUtil::checkNotNull($this->opt_status, 'opt_status');
    }
}
