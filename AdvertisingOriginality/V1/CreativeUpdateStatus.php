<?php
/**
 * 更新创意状态
 * 通过此接口可对创意做启用/暂停操作。
 * https://ad.toutiao.com/openapi/doc/index.html?id=68
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 15:26
 */
namespace AdvertisingOriginality\V1;

use core\Profile\RpcRequest;

class CreativeUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/creative/update/status/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 创意ID集合
     */
    private $creative_ids;

    /**
     * 操作, "enable"表示启用, "disable"表示暂停
     * 允许值: "enable", "disable"
     */
    private $opt_status;

    /**
     * @param mixed $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @param mixed $creative_ids
     * @return $this
     */
    public function setCreativeIds($creative_ids)
    {
        $this->params["creative_ids"] = $creative_ids;
        $this->creative_ids = $creative_ids;
        return $this;
    }

    /**
     * @param mixed $opt_status
     * @return $this
     */
    public function setOptStatus($opt_status)
    {
        $this->params["opt_status"] = $opt_status;
        $this->opt_status = $opt_status;
        return $this;
    }


}
