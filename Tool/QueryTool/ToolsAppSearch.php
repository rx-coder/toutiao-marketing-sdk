<?php
/**
 * 查询应用信息
 * https://ad.toutiao.com/openapi/doc/index.html?id=105
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 15:09
 */

namespace Tool\QueryTool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAppSearch extends RpcRequest
{
    protected $url = '/2/tools/app_search/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    protected $advertiser_id;

    /**
     * @var string 查询条件
     * APP_NAME:按名称搜索，APP_ID:按ID搜索
        默认值: APP_NAME
        允许值: "APP_NAME", "APP_ID"
     */
    protected $search_by;

    /**
     * 搜索关键字，search_by=APP_NAME时必填
     * @var string $app_name
     */
    protected $app_name;

    /**
     * 应用的ID，search_by=APP_ID时必填
     * @var integer
     */
    protected $app_id;

    /**
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param string $advertiser_id
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
    public function getAppName()
    {
        return $this->app_name;
    }

    /**
     * @param string $app_name
     * @return $this
     */
    public function setAppName($app_name)
    {
        $this->params["app_name"] = $app_name;
        $this->app_name = $app_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchBy()
    {
        return $this->search_by;
    }

    /**
     * @param string $search_by
     * @return $this
     */
    public function setSearchBy($search_by)
    {
        $this->params["search_by"] = $search_by;
        $this->search_by = $search_by;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param int $app_id
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->params["app_id"] = $app_id;
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->app_name, 'app_name');
    }
}