<?php
/**
 * 创意素材信息
 * 披露广告创意素材信息(支持查询图片、标题、素材类型、对应计划ID等)。
 * https://ad.toutiao.com/openapi/doc/index.html?id=69
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 15:45
 */
namespace AdvertisingOriginality;

use core\Profile\RpcRequest;

class CreativeMaterialRead extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/creative/material/read/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 创意ID集合
     */
    private $creative_ids;

    /**
     * 查询字段集合, 默认查询所有字段。详见下方response字段定义
     * 允许值: "id", "ad_id", "advertiser_id", "title", "image_info","image_mode", "opt_status"
     */
    private $fields;

    /**
     * @param mixed $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @param mixed $creative_ids
     * @return $this
     */
    public function setCreativeIds($creative_ids)
    {
        $this->params["creative_ids"] = $creative_ids;
        $this->creative_ids = $creative_ids;
        return $this;
    }

    /**
     * @param mixed $fields
     * @return $this
     */
    public function setFields(array $fields)
    {
        $this->params["fields"] = $fields;
        $this->fields = $fields;
        return $this;
    }


}
