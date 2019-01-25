<?php
/**
 * 刷新access_token
 * User: zhangwenzong
 * Date: 2019/1/21
 * Time: 11:10
 */

namespace AuthenticationOauth\V1;

use core\Profile\RpcRequest;

class RefreshToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/oauth2/refresh_token/';
}
