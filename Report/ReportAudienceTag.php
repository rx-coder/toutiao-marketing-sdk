<?php
/**
 * 受众分析数据 - 兴趣数据
 * https://ad.toutiao.com/openapi/doc/index.html?id=90
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 11:06
 */

namespace Report;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ReportAudienceTag extends RpcRequest
{
    protected $url = '/2/report/audience/tag/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    protected $start_date;

    /**
     * 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    protected $end_date;

    /**
     * 欲查询的指标的类型。"AUDIENCE_STAT_ID_TYPE_ADVERTISER"表示按广告主,"AUDIENCE_STAT_ID_TYPE_CAMPAIGN"表示按广告组, "AUDIENCE_STAT_ID_TYPE_AD"表示按广告计划
     * 允许值: "AUDIENCE_STAT_ID_TYPE_ADVERTISER","AUDIENCE_STAT_ID_TYPE_CAMPAIGN", "AUDIENCE_STAT_ID_TYPE_AD"
     */
    protected $id_type;

    /**
     * 欲查询的id列表,最多添加100个id。id_type为广告主，选填。其他类型，必填。
     */
    protected $ids;

    /**
     * 查询指标列表
     * 允许值: "cost", "show", "click", "download_finish", "convert"
     */
    protected $metrics;

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
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * @param $id_type string
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->params['id_type'] = $id_type;
        $this->id_type = $id_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param $ids array
     * @return $this
     */
    public function setIds($ids)
    {
        $this->params['ids'] = $ids;
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * @param $metrics array
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->params['metrics'] = $metrics;
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->start_date, 'start_date');
        RequestCheckUtil::checkNotNull($this->end_date, 'end_date');
        RequestCheckUtil::checkNotNull($this->id_type, 'id_type');
        RequestCheckUtil::checkNotNull($this->metrics, 'metrics');
    }
}