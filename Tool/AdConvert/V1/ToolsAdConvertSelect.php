<?php
/**
 * 查询计划可用转化ID
 * https://ad.toutiao.com/openapi/doc/index.html?id=174
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 18:09
 */

namespace Tool\AdConvert\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Couchbase\RegexpSearchQuery;

class ToolsAdConvertSelect extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * @var string $external_url
     */
    private $external_url;

    /**
     * @var string $package_name
     */
    private $package_name;

    /**
     * @var string $itunes_url
     */
    private $itunes_url;

    /**
     * @var array $fields
     */
    private $fields;

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
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->external_url;
    }

    /**
     * @param string $external_url
     * @return $this
     */
    public function setExternalUrl($external_url)
    {
        $this->params["external_url"] = $external_url;
        $this->external_url = $external_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * @param string $package_name
     * @return $this
     */
    public function setPackageName($package_name)
    {
        $this->params["package_name"] = $package_name;
        $this->package_name = $package_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getItunesUrl()
    {
        return $this->itunes_url;
    }

    /**
     * @param string $itunes_url
     * @return $this
     */
    public function setItunesUrl($itunes_url)
    {
        $this->params["itunes_url"] = $itunes_url;
        $this->itunes_url = $itunes_url;
        return $this;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->params["fields"] = $fields;
        $this->fields = $fields;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->external_url, 'external_url');
        RequestCheckUtil::checkNotNull($this->package_name, 'package_name');
        RequestCheckUtil::checkNotNull($this->itunes_url, 'itunes_url');
    }
}