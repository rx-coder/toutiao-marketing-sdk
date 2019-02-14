<?php
/**
 * 数据源文件上传
 * https://ad.toutiao.com/openapi/doc/index.html?id=73
 * User: Sumyf
 * Date: 2019/1/29
 * Time: 16:58
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpDataSourceFileUpload extends RpcRequest
{
    protected $url = '/2/dmp/data_source/file/upload/';
    protected $method = 'POST';
    protected $content_type = 'multipart/form-data';

    /**
     * 广告主ID
     * @var integer $advertiser_id
     */
    private $advertiser_id;

    /**
     * 文件
     * @var string $file
     */
    private $file;

    /**
     * 文件MD5
     * @var string $file_signature
     */
    private $file_signature;

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
        $this->params['advertiser_id'] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->params['file'] = '@' . realpath($file);
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileSignature()
    {
        return $this->file_signature;
    }

    /**
     * @param string $file_signature
     * @return $this
     */
    public function setFileSignature($file_signature)
    {
        $this->params['file_signature'] = $file_signature;
        $this->file_signature = $file_signature;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkFileExist($this->file, 'file');
    }
}