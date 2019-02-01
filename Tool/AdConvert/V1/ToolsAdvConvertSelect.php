<?php
/**
 * 转化ID列表
 * https://ad.toutiao.com/openapi/doc/index.html?id=175
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 15:34
 */

namespace Tool\AdConvert\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdvConvertSelect extends RpcRequest
{
    protected $url = '/2/tools/adv_convert/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 需要查询的convert_ids，如不填写默认返回所有的转化ID
     * @var array $convert_ids
     */
    private $convert_ids;

    /**
     * 操作状态
     * @var string $opt_status
     */
    private $opt_status;

    /**
     * 页数 默认值： 1
     * @var int $page
     */
    private $page;

    /**
     * 页面大小 默认值： 10
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
     * @return array
     */
    public function getConvertIds()
    {
        return $this->convert_ids;
    }

    /**
     * @param array $convert_ids
     * @return $this
     */
    public function setConvertIds($convert_ids)
    {
        $this->params["convert_ids"] = $convert_ids;
        $this->convert_ids = $convert_ids;
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