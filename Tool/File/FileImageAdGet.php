<?php
/**
 * 查询图片信息
 * https://ad.toutiao.com/openapi/doc/index.html?id=182
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 11:10
 */

namespace Tool\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileImageAdGet extends RpcRequest
{
    protected $url = '/2/file/image/ad/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 图片ids
     * @var array $image_ids
     */
    private $image_ids;

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
    public function getImageIds()
    {
        return $this->image_ids;
    }

    /**
     * @param array $image_ids
     * @return $this
     */
    public function setImageIds($image_ids)
    {
        $this->params["image_ids"] = $image_ids;
        $this->image_ids = $image_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->image_ids, 'image_ids');
    }
}