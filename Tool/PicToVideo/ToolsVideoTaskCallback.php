<?php
/**
 * 视频任务回调接口
 * https://ad.toutiao.com/openapi/doc/index.html?id=235
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 11:03
 */

namespace Tool\PicToVideo\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsVideoTaskCallback extends RpcRequest
{
    protected $url = '';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 模版类型
     * @var string $template_category
     */
    private $template_category;

    /**
     * @var int $template_id
     */
    private $template_id;

    /**
     * @var string $video_uri
     */
    private $video_uri;

    /**
     * @var int $errcode
     */
    private $errcode;

    /**
     * @var string $errmsg
     */
    private $errmsg;

    /**
     * @var array $video_detail
     */
    private $video_detail;

    /**
     * @return string
     */
    public function getTemplateCategory()
    {
        return $this->template_category;
    }

    /**
     * @param string $template_category
     * @return $this
     */
    public function setTemplateCategory($template_category)
    {
        $this->params["template_category"] = $template_category;
        $this->template_category = $template_category;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * @param int $template_id
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->params["template_id"] = $template_id;
        $this->template_id = $template_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUri()
    {
        return $this->video_uri;
    }

    /**
     * @param string $video_uri
     * @return $this
     */
    public function setVideoUri($video_uri)
    {
        $this->params["video_uri"] = $video_uri;
        $this->video_uri = $video_uri;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrcode()
    {
        return $this->errcode;
    }

    /**
     * @param int $errcode
     * @return $this
     */
    public function setErrcode($errcode)
    {
        $this->params["errcode"] = $errcode;
        $this->errcode = $errcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrmsg()
    {
        return $this->errmsg;
    }

    /**
     * @param string $errmsg
     * @return $this
     */
    public function setErrmsg($errmsg)
    {
        $this->params["errmsg"] = $errmsg;
        $this->errmsg = $errmsg;
        return $this;
    }

    /**
     * @return array
     */
    public function getVideoDetail()
    {
        return $this->video_detail;
    }

    /**
     * @param array $video_detail
     * @return $this
     */
    public function setVideoDetail($video_detail)
    {
        $this->params["video_detail"] = $video_detail;
        $this->video_detail = $video_detail;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->template_category, 'template_category');
        RequestCheckUtil::checkNotNull($this->template_id, 'template_id');
        RequestCheckUtil::checkNotNull($this->video_uri, 'video_uri');
        RequestCheckUtil::checkNotNull($this->errcode, 'errcode');
        RequestCheckUtil::checkNotNull($this->errmsg, 'errmsg');
        RequestCheckUtil::checkNotNull($this->video_detail, 'video_detail');
    }
}