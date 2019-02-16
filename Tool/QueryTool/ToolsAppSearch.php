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
    private $advertiser_id;

    /**
     * 搜索关键字
     * @var string $app_name
     */
    private $app_name;

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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->app_name, 'app_name');
    }
}