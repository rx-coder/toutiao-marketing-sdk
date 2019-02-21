<?php
/**
 * 获取视频智能封面
 * https://ad.toutiao.com/openapi/doc/index.html?id=244
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 11:25
 */

namespace Tool\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsVideoCoverSuggest extends RpcRequest
{
    protected $url = '/2/tools/video_cover/suggest/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 视频id
     * @var string $video_id
     */
    protected $video_id;

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