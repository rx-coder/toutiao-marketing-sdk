<?php
/**
 * 获得auth_code的url地址
 * User: zhangwenzong
 * Date: 2019/1/21
 * Time: 10:12
 */

namespace AuthenticationOauth\V1;
class GetAuthCodeUrl
{
    /**
     * @var string
     */
    protected $url = '';

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($app_id)
    {
        $this->url = 'https://ad.toutiao.com/openapi/audit/oauth.html?app_id=' . $app_id . '&state=your_custom_params&scope=%5B1%2C2%2C3%2C4%2C5%5D&redirect_uri=http%3A%2F%2Fpassion.haolints.com%2F';
    }
}
