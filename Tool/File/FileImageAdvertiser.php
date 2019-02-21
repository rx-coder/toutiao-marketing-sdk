<?php
/**
 * 广告主图片
 * https://ad.toutiao.com/openapi/doc/index.html?id=95
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 10:08
 */

namespace Tool\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileImageAdvertiser extends RpcRequest
{
    protected $url = '/2/file/image/advertiser/';
    protected $method = 'POST';
    protected $content_type = 'multipart/form-data';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 图片上传方式
     * 默认值: UPLOAD_BY_FILE
     * 允许值: "UPLOAD_BY_FILE", "UPLOAD_BY_URL"
     * @var string $upload_type
     */
    protected $upload_type = 'UPLOAD_BY_FILE';

    /**
     * 图片的md5(用于服务端校验)，upload_type为UPLOAD_BY_FILE必填
     * @var string $image_signature
     */
    protected $image_signature;

    /**
     * 图片文件,格式jpg, jpeg, png, bmp, gif, 大小1M内，upload_type为UPLOAD_BY_FILE必填
     * @var string $image_file
     */
    protected $image_file;

    /**
     * 图片url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     * @var string $image_url
     */
    protected $image_url;

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
    public function getUploadType()
    {
        return $this->upload_type;
    }

    /**
     * @param string $upload_type
     * @return $this
     */
    public function setUploadType($upload_type)
    {
        $this->params["upload_type"] = $upload_type;
        $this->upload_type = $upload_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageSignature()
    {
        return $this->image_signature;
    }

    /**
     * @param string $image_signature
     * @return $this
     */
    public function setImageSignature($image_signature)
    {
        $this->params["image_signature"] = $image_signature;
        $this->image_signature = $image_signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageFile()
    {
        return $this->image_file;
    }

    /**
     * @param string $image_file
     * @return $this
     */
    public function setImageFile($image_file)
    {
        $this->params["image_file"] = '@' . $image_file;
        $this->image_file = $image_file;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->params["image_url"] = $image_url;
        $this->image_url = $image_url;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        if ($this->upload_type == '"UPLOAD_BY_URL"') {
            RequestCheckUtil::checkNotNull($this->image_url, 'image_url');
        } else {
            RequestCheckUtil::checkNotNull($this->image_signature, 'image_signature');
            RequestCheckUtil::checkNotNull($this->image_file, 'image_file');
        }
    }
}