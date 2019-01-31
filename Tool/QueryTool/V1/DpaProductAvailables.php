<?php
/**
 * 查询DPA商品库可用类型
 * https://ad.toutiao.com/openapi/doc/index.html?id=108
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 15:31
 */

namespace Tool\QueryTool\V1;

use core\Profile\RpcRequest;

class DpaProductAvailables extends RpcRequest
{
    protected $url = '/2/dpa/product/availables/';
    protected $method = 'GET';
    protected $content_type = 'application/json';
}