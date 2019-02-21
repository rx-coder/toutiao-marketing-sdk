<?php
/**
 * 查看视频信息
 * https://ad.toutiao.com/openapi/doc/index.html?id=184
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 11:17
 */

namespace Tool\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileVideoAdGet extends RpcRequest
{
    protected $url = '/2/file/video/ad/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 视频ids
     * @var array $video_ids
     */
    protected $video_ids;

    /**
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param string $advertiser_id
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
    public function getVideoIds()
    {
        return $this->video_ids;
    }

    /**
     * @param array $video_ids
     * @return $this
     */
    public function setVideoIds($video_ids)
    {
        $this->params["video_ids"] = $video_ids;
        $this->video_ids = $video_ids;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->video_ids, 'video_ids');
    }
}