<?php
/**
 * 获取任务状态
 * https://ad.toutiao.com/openapi/doc/index.html?id=234
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 10:52
 */

namespace Tool\PicToVideo\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsPicToVideoStatusGet extends RpcRequest
{
    protected $url = '/2/tools/pic_to_video/status/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 视频ID
     * @var string $video_id
     */
    private $video_id;

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
     * @return string
     */
    public function getVideoId()
    {
        return $this->video_id;
    }

    /**
     * @param string $video_id
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->params["video_id"] = $video_id;
        $this->video_id = $video_id;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->video_id, 'video_id');
    }
}