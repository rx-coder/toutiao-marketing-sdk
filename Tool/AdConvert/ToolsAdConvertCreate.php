<?php
/**
 * 创建转化ID
 * https://ad.toutiao.com/openapi/doc/index.html?id=213
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 17:46
 */

namespace Tool\AdConvert;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdConvertCreate extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/create/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 转化名称
     * @var string $name
     */
    protected $name;

    /**
     * 转化来源，详见【附录-转化工具来源】，默认为AD_CONVERT_SOURCE_TYPE_APP_DOWNLOAD
     * @var string $convert_source_type
     */
    protected $convert_source_type;

    /**
     * 下载链接
     * @var string $download_url
     */
    protected $download_url;

    /**
     * 应用类型
     * 允许值: "APP_ANDROID", "APP_IOS"
     * @var string $app_type
     */
    protected $app_type;

    /**
     * 转化监测链接
     * @var string $action_track_url
     */
    protected $action_track_url;

    /**
     * 包名
     * @var string $package_name
     */
    protected $package_name;

    /**
     * 转化类型，详见【附录-转化类型】
     * @var string $convert_type
     */
    protected $convert_type;

    /**
     * XPath转化路径
     * @var string $convert_xpath_value
     */
    protected $convert_xpath_value;

    /**
     * XPath转化页面地址
     * @var string $convert_xpath_url
     */
    protected $convert_xpath_url;

    /**
     * 落地页地址
     * @var string $external_url
     */
    protected $external_url;

    /**
     * APP ID
     * @var string $app_id
     */
    protected $app_id;

    /**
     * 直达链接
     * @var string $open_url
     */
    protected $open_url;

    /**
     *
     * 深度转化目标，详见【附录-深度转化类型】
     * "AD_CONVERT_TYPE_ACTIVE_REGISTER"
     * "AD_CONVERT_TYPE_PAY"
     * "AD_CONVERT_TYPE_NEXT_DAY_OPEN"
     * @var string
     */
    protected $deep_external_action;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->params["name"] = $name;
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertSourceType()
    {
        return $this->convert_source_type;
    }

    /**
     * @param string $convert_source_type
     * @return $this
     */
    public function setConvertSourceType($convert_source_type)
    {
        $this->params["convert_source_type"] = $convert_source_type;
        $this->convert_source_type = $convert_source_type;
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
     * @return string
     */
    public function getAppType()
    {
        return $this->app_type;
    }

    /**
     * @param string $app_type
     * @return $this
     */
    public function setAppType($app_type)
    {
        $this->params["app_type"] = $app_type;
        $this->app_type = $app_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionTrackUrl()
    {
        return $this->action_track_url;
    }

    /**
     * @param string $action_track_url
     * @return $this
     */
    public function setActionTrackUrl($action_track_url)
    {
        $this->params["action_track_url"] = $action_track_url;
        $this->action_track_url = $action_track_url;
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
    public function getConvertType()
    {
        return $this->convert_type;
    }

    /**
     * @param string $convert_type
     * @return $this
     */
    public function setConvertType($convert_type)
    {
        $this->params["convert_type"] = $convert_type;
        $this->convert_type = $convert_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertXpathValue()
    {
        return $this->convert_xpath_value;
    }

    /**
     * @param string $convert_xpath_value
     * @return $this
     */
    public function setConvertXpathValue($convert_xpath_value)
    {
        $this->params["convert_xpath_value"] = $convert_xpath_value;
        $this->convert_xpath_value = $convert_xpath_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertXpathUrl()
    {
        return $this->convert_xpath_url;
    }

    /**
     * @param string $convert_xpath_url
     * @return $this
     */
    public function setConvertXpathUrl($convert_xpath_url)
    {
        $this->params["convert_xpath_url"] = $convert_xpath_url;
        $this->convert_xpath_url = $convert_xpath_url;
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
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param string $app_id
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->params["app_id"] = $app_id;
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrl()
    {
        return $this->open_url;
    }

    /**
     * @param string $open_url
     * @return $this
     */
    public function setOpenUrl($open_url)
    {
        $this->params["open_url"] = $open_url;
        $this->open_url = $open_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeepExternalAction()
    {
        return $this->deep_external_action;
    }

    /**
     * @param string $deep_external_action
     * @return $this
     */
    public function setDeepExternalAction($deep_external_action)
    {
        $this->params["deep_external_action"] = $deep_external_action;
        $this->deep_external_action = $deep_external_action;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->name, 'name');
    }
}