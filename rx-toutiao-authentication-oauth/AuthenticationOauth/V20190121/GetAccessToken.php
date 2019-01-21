<?php
/**
 * 获取access_token
 * User: zhangwenzong
 * Date: 2019/1/21
 * Time: 10:31
 */
namespace AuthenticationOauth\V20190121;
use core\Profile\RequestInteface;

class GetAccessToken implements RequestInteface
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = 'https://ad.toutiao.com/open_api/oauth2/access_token/';

    public function getMethod()
    {
        return $this->method;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
