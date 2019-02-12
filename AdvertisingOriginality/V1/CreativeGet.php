<?php
/**
 * 获取创意列表
 * 通过新版的创意列表接口较老版creative/select接口增加创意的视频ID、创意拒绝理由的返回，
 * 除此之外新版接口支持多维度的fields过滤，能给你带来更好的使用体验。
 * https://ad.toutiao.com/openapi/doc/index.html?id=263
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 10:02
 */
namespace AdvertisingOriginality\V1;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class CreativeGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/creative/get/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 页数(可选)
     */
    private $page;

    /**
     * 页面大小(可选)
     */
    private $page_size;

    /**
     * 过滤条件 (可选)
     * 若此字段不传，或传空则视为无限制条件，查看账号总创意。
     */
    private $filtering;

    /**
     * (可选)
     * 【过滤条件】按照campaign_id过滤
     */
    private $campaign_id;

    /**
     * (可选)
     * 【过滤条件】按照ad_id过滤
     */
    private $ad_id;

    /**
     * (可选)
     * 【过滤条件】按照creative_id过滤
     */
    private $creative_ids;

    /**
     * (可选)
     * 【过滤条件】按照creative_title过滤，支持模糊搜索
     */
    private $creative_title;

    /**
     * (可选)
     * 【过滤条件】按照广告组推广目的过滤
     */
    private $landing_type;

    /**
     * (可选)
     * 【过滤条件】按照ad出价方式过滤
     */
    private $pricing;

    /**
     * (可选)
     * 【过滤条件】按照创意状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告创意状态】
     */
    private $status;

    /**
     * (可选)
     * 【过滤条件】按照创意素材类型过滤
     */
    private $image_mode;

    /**
     * (可选)
     * 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典，默认全部指定
     * 允许值: "creative_id", "ad_id", "advertiser_id", "status","opt_status",
     * "image_mode", "title", "creative_word_ids","third_party_id", "image_ids",
     * "image_id", "video_id","audit_reject_reason", "materials"
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
     * @param mixed $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->params["page"] = $page;
        $this->page = $page;
        return $this;
    }

    /**
     * @param mixed $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->params["page_size"] = $page_size;
        $this->page_size = $page_size;
        return $this;
    }

    /**
     * @param mixed $filtering
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->params["filtering"] = $filtering;
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * @param mixed $campaign_id
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->params["filtering"]["campaign_id"] = $campaign_id;
        $this->campaign_id = $campaign_id;
        return $this;
    }

    /**
     * @param mixed $ad_id
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->params["filtering"]["ad_id"] = $ad_id;
        $this->ad_id = $ad_id;
        return $this;
    }

    /**
     * @param mixed $creative_ids
     * @return $this
     */
    public function setCreativeIds($creative_ids)
    {
        $this->params["filtering"]["creative_ids"] = $creative_ids;
        $this->creative_ids = $creative_ids;
        return $this;
    }

    /**
     * @param mixed $creative_title
     * @return $this
     */
    public function setCreativeTitle($creative_title)
    {
        $this->params["filtering"]["creative_title"] = $creative_title;
        $this->creative_title = $creative_title;
        return $this;
    }

    /**
     * @param mixed $landing_type
     * @return $this
     */
    public function setLandingType($landing_type)
    {
        $this->params["filtering"]["landing_type"] = $landing_type;
        $this->landing_type = $landing_type;
        return $this;
    }

    /**
     * @param mixed $pricing
     * @return $this
     */
    public function setPricing($pricing)
    {
        $this->params["filtering"]["pricing"] = $pricing;
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @param mixed $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->params["filtering"]["status"] = $status;
        $this->status = $status;
        return $this;
    }

    /**
     * @param mixed $image_mode
     * @return $this
     */
    public function setImageMode($image_mode)
    {
        $this->params["filtering"]["image_mode"] = $image_mode;
        $this->image_mode = $image_mode;
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
