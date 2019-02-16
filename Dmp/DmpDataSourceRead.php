<?php
/**
 * 数据源详细信息
 * https://ad.toutiao.com/openapi/doc/index.html?id=77
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 11:29
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpDataSourceRead extends RpcRequest
{
    protected $url = '/2/dmp/data_source/read/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 数据源ID列表
     * @var array $data_source_id_list
     */
    private $data_source_id_list;

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
        $this->params['advertiser_id'] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getDataSourceIdList()
    {
        return $this->data_source_id_list;
    }

    /**
     * @param array $data_source_id_list
     * @return $this
     */
    public function setDataSourceIdList($data_source_id_list)
    {
        $this->params['data_source_id_list'] = $data_source_id_list;
        $this->data_source_id_list = $data_source_id_list;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->data_source_id_list, 'data_source_id_list');
    }
}