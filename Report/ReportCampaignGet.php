<?php
/**
 * 广告组数据（新版）
 * https://ad.toutiao.com/openapi/doc/index.html?id=243
 * User: Sumyf
 * Date: 2019/1/28
 * Time: 17:22
 */

namespace Report;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ReportCampaignGet extends RpcRequest
{
    protected $url = '/2/report/campaign/get/';
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
     * 搜索页码 默认值: 1
     */
    private $page;

    /**
     * 一页展示的数据数量 默认值: 20
     */
    private $page_size;

    /**
     * 分组条件，默认为STAT_GROUP_BY_FIELD_STAT_TIME "STAT_GROUP_BY_FIELD_STAT_TIME"表示按时间分组,"STAT_GROUP_BY_FIELD_ID"表示按id分组
     * 允许值: "STAT_GROUP_BY_FIELD_STAT_TIME", "STAT_GROUP_BY_FIELD_ID"
     * 假设一次查询中共有m个id，n个时间，有以下三种情况：‍
     * ①group_by=["STAT_GROUP_BY_FIELD_STAT_TIME"]表示数据按照时间聚合，即本次返回最多为n个数据，表示将m个id的数据根据n个时间各自累计，因此返回中没有相应的id。‍
     * ②group_by=["STAT_GROUP_BY_FIELD_ID"]表示按照id聚合，本次返回最多返回m条数据，即将n天的数据按照m个id各自累加。‍
     * ③group_by=["STAT_GROUP_BY_FIELD_ID", "STAT_GROUP_BY_FIELD_STAT_TIME"]表示按照时间和id同时聚合，最多返回m * n个数据，返回数据中会同时存在id和时间
     */
    private $group_by;

    /**
     * 时间粒度, 当分组为"STAT_GROUP_BY_FIELD_ID"无效。 "STAT_TIME_GRANULARITY_DAILY"表示天, "STAT_TIME_GRANULARITY_HOURLY"表示小时
     * 默认值: STAT_TIME_GRANULARITY_DAILY
     * 允许值: "STAT_TIME_GRANULARITY_DAILY","STAT_TIME_GRANULARITY_HOURLY"
     */
    private $time_granularity;

    /**
     * 过滤字段，json格式，如果campaign_ids不填默认按照广告主过滤，支持字段如下
     */
    private $filtering = [];

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
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->params['start_date'] = $start_date;
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->params['end_date'] = $end_date;
        $this->end_date = $end_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->params['page'] = $page;
        $this->page = $page;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->params['page_size'] = $page_size;
        $this->page_size = $page_size;
        return $this;
    }

    /**
     * @return array
     */
    public function getGroupBy()
    {
        return $this->group_by;
    }

    /**
     * @param array $group_by
     * @return $this
     */
    public function setGroupBy($group_by)
    {
        $this->params['group_by'] = $group_by;
        $this->group_by = $group_by;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeGranularity()
    {
        return $this->time_granularity;
    }

    /**
     * @param $time_granularity
     * @return $this
     */
    public function setTimeGranularity($time_granularity)
    {
        $this->params['time_granularity'] = $time_granularity;
        $this->time_granularity = $time_granularity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFiltering()
    {
        return $this->filtering;
    }

    /**
     * @param $filtering
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->params['filtering'] = $filtering;
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * @param array $filtering
     * @return $this
     */
    public function addFiltering($filtering)
    {
        $filtering = array_merge($this->filtering, $filtering);
        $this->params['filtering'] = $filtering;
        $this->filtering = $filtering;
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