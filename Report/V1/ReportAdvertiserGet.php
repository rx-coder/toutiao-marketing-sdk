<?php
/**
 * 广告主数据（新版）
 * https://ad.toutiao.com/openapi/doc/index.html?id=243
 * User: Sumyf
 * Date: 2019/1/28
 * Time: 16:20
 */

namespace Report\V1;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ReportAdvertiserGet extends RpcRequest
{
    protected $url = '/2/report/advertiser/get/';
    protected $content_type = 'application/json';
    protected $method = 'GET';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    private $start_date;

    /**
     * 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    private $end_date;

    /**
     * 搜索页码, 默认值为1
     */
    private $page;

    /**
     * 一页展示的数据数量
     */
    private $page_size;

    /**
     * 时间粒度 "STAT_TIME_GRANULARITY_DAILY"表示天, "STAT_TIME_GRANULARITY_HOURLY"表示小时
     * 默认值: STAT_TIME_GRANULARITY_DAILY
     * 允许值: "STAT_TIME_GRANULARITY_DAILY","STAT_TIME_GRANULARITY_HOURLY"
     */
    private $time_granularity;

    /**
     * @return mixed
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param mixed $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params['advertiser_id'] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param string $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->params['start_date'] = $start_date;
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param string $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->params['end_date'] = $end_date;
        $this->end_date = $end_date;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param integer $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->params['page'] = $page;
        $this->page = $page;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param integer $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->params['page_size'] = $page_size;
        $this->page_size = $page_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeGranularity()
    {
        return $this->time_granularity;
    }

    /**
     * @param string $time_granularity
     * @return $this
     */
    public function setTimeGranularity($time_granularity)
    {
        $this->params['time_granularity'] = $time_granularity;
        $this->time_granularity = $time_granularity;
        return $this;
    }

    /**
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->start_date, 'start_date');
        RequestCheckUtil::checkNotNull($this->end_date, 'end_date');
    }
}