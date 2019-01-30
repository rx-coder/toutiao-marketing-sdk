<?php
/**
 * 数据源更新
 * https://ad.toutiao.com/openapi/doc/index.html?id=75
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 11:08
 */

namespace Dmp\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpDataSourceUpdate extends RpcRequest
{
    protected $url = '/2/dmp/data_source/update/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 数据源ID
     * @var string $data_source_id
     */
    private $data_source_id;

    /**
     * 更新操作类型, 1: 添加append, 2: 删除delete, 3:重置 reset
     * @var int $operation_type
     */
    private $operation_type;

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
    public function getDataSourceId()
    {
        return $this->data_source_id;
    }

    /**
     * @param string $data_source_id
     * @return $this
     */
    public function setDataSourceId($data_source_id)
    {
        $this->params['data_source_id'] = $data_source_id;
        $this->data_source_id = $data_source_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * @param int $operation_type
     * @return $this
     */
    public function setOperationType($operation_type)
    {
        $this->params['operation_type'] = $operation_type;
        $this->operation_type = $operation_type;
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
        RequestCheckUtil::checkNotNull($this->data_source_id, 'date_source_id');
        RequestCheckUtil::checkNotNull($this->operation_type, 'operation_type');
        RequestCheckUtil::checkNotNull($this->data_format, 'data_format');
        RequestCheckUtil::checkNotNull($this->file_storage_type, 'file_storage_type');
        RequestCheckUtil::checkNotNull($this->file_paths, 'file_paths');
    }
}