<?php
/**
 * 删除兴趣词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=137
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 17:27
 */

namespace Tool\InterestTag;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsInterestTagsDelete extends RpcRequest
{
    protected $url = '/2/tools/interest_tags/delete/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 兴趣关键词词包id
     * @var int $id
     */
    private $id;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->params["id"] = $id;
        $this->id = $id;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->id, 'id');
    }
}