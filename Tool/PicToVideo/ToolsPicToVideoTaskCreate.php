<?php
/**
 * 创建图片转视频任务
 * https://ad.toutiao.com/openapi/doc/index.html?id=232
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 10:27
 */

namespace Tool\PicToVideo\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsPicToVideoTaskCreate extends RpcRequest
{
    protected $url = '/2/tools/pic_to_video/task/create/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 模版类型
     * @var string $template_type
     */
    private $template_type;

    /**
     * 音乐名称
     * @var string $music_name
     */
    private $music_name;

    /**
     * 回调地址，详见视频任务回调接口
     * @var string $callback_url
     */
    private $callback_url;

    /**
     * 其他信息
     * @var array $other_info
     */
    private $other_info;

    /**
     * 资源信息
     * @var array $map_id_resource
     */
    private $map_id_resource;

    /**
     * 视频宽度
     * @var int $video_width
     */
    private $video_width;

    /**
     * 视频高度
     * @var int $video_height
     */
    private $video_height;

    /**
     * 是否resize图片，0表示不resize，1表示resize，默认为1
     * @var int $resize_image
     */
    private $resize_image;

    /**
     * 是否拷贝资源，0表示不拷贝，1表示拷贝，默认为1
     * @var int $copy_resource
     */
    private $copy_resource;

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
    public function getTemplateType()
    {
        return $this->template_type;
    }

    /**
     * @param string $template_type
     * @return $this
     */
    public function setTemplateType($template_type)
    {
        $this->params["template_type"] = $template_type;
        $this->template_type = $template_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getMusicName()
    {
        return $this->music_name;
    }

    /**
     * @param string $music_name
     * @return $this
     */
    public function setMusicName($music_name)
    {
        $this->params["music_name"] = $music_name;
        $this->music_name = $music_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    /**
     * @param string $callback_url
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->params["callback_url"] = $callback_url;
        $this->callback_url = $callback_url;
        return $this;
    }

    /**
     * @return array
     */
    public function getOtherInfo()
    {
        return $this->other_info;
    }

    /**
     * @param array $other_info
     * @return $this
     */
    public function setOtherInfo($other_info)
    {
        $this->params["other_info"] = $other_info;
        $this->other_info = $other_info;
        return $this;
    }

    /**
     * @return array
     */
    public function getMapIdResource()
    {
        return $this->map_id_resource;
    }

    /**
     * @param array $map_id_resource
     * @return $this
     */
    public function setMapIdResource($map_id_resource)
    {
        $this->params["map_id_resource"] = $map_id_resource;
        $this->map_id_resource = $map_id_resource;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoWidth()
    {
        return $this->video_width;
    }

    /**
     * @param int $video_width
     * @return $this
     */
    public function setVideoWidth($video_width)
    {
        $this->params["video_width"] = $video_width;
        $this->video_width = $video_width;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoHeight()
    {
        return $this->video_height;
    }

    /**
     * @param int $video_height
     * @return $this
     */
    public function setVideoHeight($video_height)
    {
        $this->params["video_height"] = $video_height;
        $this->video_height = $video_height;
        return $this;
    }

    /**
     * @return int
     */
    public function getResizeImage()
    {
        return $this->resize_image;
    }

    /**
     * @param int $resize_image
     * @return $this
     */
    public function setResizeImage($resize_image)
    {
        $this->params["resize_image"] = $resize_image;
        $this->resize_image = $resize_image;
        return $this;
    }

    /**
     * @return int
     */
    public function getCopyResource()
    {
        return $this->copy_resource;
    }

    /**
     * @param int $copy_resource
     * @return $this
     */
    public function setCopyResource($copy_resource)
    {
        $this->params["copy_resource"] = $copy_resource;
        $this->copy_resource = $copy_resource;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
       RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
       RequestCheckUtil::checkNotNull($this->template_type, 'template_type');
       RequestCheckUtil::checkNotNull($this->music_name, 'music_name');
       RequestCheckUtil::checkNotNull($this->map_id_resource, 'map_id_resource');
    }
}