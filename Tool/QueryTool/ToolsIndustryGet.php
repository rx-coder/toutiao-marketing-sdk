<?php
/**
 * 获取行业列表
 * https://ad.toutiao.com/openapi/doc/index.html?id=312
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:25
 */

namespace Tool\QueryTool;

use core\Profile\RpcRequest;

class ToolsIndustryGet extends RpcRequest
{
    protected $url = '/2/tools/industry/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 只获取某级别数据，1:第一级,2:第二级,3:第三级，默认都返回
     * @var int $level
     */
    protected $level;

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->params["level"] = $level;
        $this->level = $level;
        return $this;
    }
}
