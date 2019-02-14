<?php
/**
 * 修改转化ID
 * https://ad.toutiao.com/openapi/doc/index.html?id=173
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 17:59
 */

namespace Tool\AdConvert;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdConvertUpdate extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/update/';
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
     * 下载链接
     * @var string $download_url
     */
    private $download_url;

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
    public function getDownloadUrl()
    {
        return $this->download_url;
    }

    /**
     * @param string $download_url
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->params["download_url"] = $download_url;
        $this->download_url = $download_url;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->convert_id, 'convert_id');
        RequestCheckUtil::checkNotNull($this->download_url, 'download_url');
    }
}