<?php
/**
 * 数据源创建
 * https://ad.toutiao.com/openapi/doc/index.html?id=74
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 10:17
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpDataSourceCreate extends RpcRequest
{
    protected $url = '/2/dmp/data_source/create/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 数据源名称, 限30个字符内（使用API通过上传数据源方式创建的人群包生成后人群包名称会与数据源名称一致，人群包标签会默认为“API文件数据源”）
     * @var string $data_source_name
     */
    private $data_source_name;

    /**
     * 数据源描述, 限256字符内
     * @var string $description
     */
    private $description;

    /**
     * 数据格式, 0: ProtocolBuffer
     * @var int $data_format
     */
    private $data_format;

    /**
     * 数据存储类型, 0: API
     * @var int $file_storage_type
     */
    private $file_storage_type;

    /**
     * 通过上传接口得到的文件路径
     * @var array $file_paths
     */
    private $file_paths;

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
    public function getDataSourceName()
    {
        return $this->data_source_name;
    }

    /**
     * @param string $data_source_name
     * @return $this
     */
    public function setDataSourceName($data_source_name)
    {
        $this->params['data_source_name'] = $data_source_name;
        $this->data_source_name = $data_source_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->params['description'] = $description;
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getDataFormat()
    {
        return $this->data_format;
    }

    /**
     * @param int $data_format
     * @return $this
     */
    public function setDataFormat($data_format)
    {
        $this->params['data_format'] = $data_format;
        $this->data_format = $data_format;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileStorageType()
    {
        return $this->file_storage_type;
    }

    /**
     * @param int $file_storage_type
     * @return $this
     */
    public function setFileStorageType($file_storage_type)
    {
        $this->params['file_storage_type'] = $file_storage_type;
        $this->file_storage_type = $file_storage_type;
        return $this;
    }

    /**
     * @return array
     */
    public function getFilePaths()
    {
        return $this->file_paths;
    }

    /**
     * @param array $file_paths
     * @return $this
     */
    public function setFilePaths($file_paths)
    {
        $this->params['file_paths'] = $file_paths;
        $this->file_paths = $file_paths;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->data_source_name, 'data_source_name');
        RequestCheckUtil::checkNotNull($this->description, 'description');
        RequestCheckUtil::checkNotNull($this->data_format, 'data_format');
        RequestCheckUtil::checkNotNull($this->file_storage_type, 'file_storage_type');
        RequestCheckUtil::checkNotNull($this->file_paths, 'file_paths');
    }
}