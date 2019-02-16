<?php
/**
 * 获取建站列表
 * https://ad.toutiao.com/openapi/doc/index.html?id=279
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 11:37
 */

namespace Tool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsSiteGet extends RpcRequest
{
    protected $url = '/2/tools/site/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 页码 默认值: 1
     * @var int $page
     */
    private $page;

    /**
     * 页面数据量 默认值: 20
     * @var int $page_size
     */
    private $page_size;

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
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->params["page"] = $page;
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param int $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->params["page_size"] = $page_size;
        $this->page_size = $page_size;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}