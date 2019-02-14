<?php
/**
 * 人群包列表
 * https://ad.toutiao.com/openapi/doc/index.html?id=76
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 11:55
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudienceSelect extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 查询类型, 0: 属于该广告主的人群包, 1: 该广告主可用的人群包.
     * @var int $select_type
     */
    private $select_type;

    /**
     * 偏移,类似于SQL中offset(起始为0,翻页时new_offset=old_offset+limit) 默认值: 0
     * @var int $offset
     */
    private $offset;

    /**
     * 返回数据量 默认值: 30
     * @var int $limit
     */
    private $limit;

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
    public function getSelectType()
    {
        return $this->select_type;
    }

    /**
     * @param int $select_type
     * @return $this
     */
    public function setSelectType($select_type)
    {
        $this->params["select_type"] = $select_type;
        $this->select_type = $select_type;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->params["offset"] = $offset;
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->params["limit"] = $limit;
        $this->limit = $limit;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->select_type, 'select_type');
    }
}