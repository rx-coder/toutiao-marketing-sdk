<?php
/**
 * 获取地域列表
 * https://ad.toutiao.com/openapi/doc/index.html?id=317
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:25
 */

namespace Tool\QueryTool;

use core\Profile\RpcRequest;

class ToolsRegionGet extends RpcRequest
{
    protected $url = '/2/tools/region/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 地域类型，目前只支持：BUSINESS_DISTRICT(商圈)
     * @var string $region_type
     */
    protected $region_type;

    /**
     * 只获取某层级数据，详见【附录-地域层级】
     * @var string  $region_level
     */
    protected $region_level;

    /**
     * @return string
     */
    public function getRegionType()
    {
        return $this->region_type;
    }

    /**
     * @param string $region_type
     * @return $this
     */
    public function setRegionType($region_type)
    {
        $this->params['region_type'] = $region_type;
        $this->region_type = $region_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionLevel()
    {
        return $this->region_level;
    }

    /**
     * @param string $region_level
     * @return $this
     */
    public function setRegionLevel($region_level)
    {
        $this->params['region_level'] = $region_level;
        $this->region_level = $region_level;
        return $this;
    }
}
