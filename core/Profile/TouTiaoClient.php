<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 16:29
 */

namespace core\Profile;

use AdvertisingDelivery\V1\GetCampaign;
use AuthenticationOauth\V1\GetAccessToken;
use AuthenticationOauth\V1\GetAuthCodeUrl;
use AuthenticationOauth\V1\RefreshToken;
use core\Exception\TouTiaoException;
use core\Http\HttpRequest;

class TouTiaoClient
{

    public $app_id;

    public $secret;

    public $profile;

    public $params;

    public $headers = [];


    public function __construct($app_id, $secret)
    {
        $this->app_id = $app_id;
        $this->secret = $secret;
    }

    /**
     * 获取广告组
     * @return string
     * @throws TouTiaoException
     */
    public function getCampaign()
    {
        return self::push(new GetCampaign())->getBody();
    }


    /**
     * 获得auth_code的url地址
     * @return string
     */
    public function getAuthCodeUrl()
    {
        $obj = new GetAuthCodeUrl();
        $obj->setUrl($this->app_id);
        return $obj->getUrl();
    }

    /**
     * 获取access_token
     * @return string
     * @throws TouTiaoException
     */
    public function getAccessToken()
    {
        $this->headers = ['Content-Type' => 'application/json'];
        $this->params = array_merge($this->params, ['grant_type' => 'auth_code', 'app_id' => $this->app_id, 'secret' => $this->secret]);
        return self::push(new GetAccessToken())->getBody();
    }

    /**
     * 刷新access_token
     * @return string
     * @throws TouTiaoException
     */
    public function refreshToken()
    {
        $this->headers = ['Content-Type' => 'application/json'];
        $this->params = array_merge($this->params, ['grant_type' => 'refresh_token', 'app_id' => $this->app_id, 'secret' => $this->secret]);
        return self::push(new RefreshToken())->getBody();
    }


    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    public function setHeaders($headers = false)
    {
        if ($headers) $this->headers = $headers;
        return $this;
    }

    /**
     * push执行
     * @return \core\Http\HttpResponse
     * @throws TouTiaoException
     */
    public function push(RequestInteface $inteface)
    {
        return HttpRequest::curl($inteface->getUrl(), $inteface->getMethod(), json_encode($this->params), $this->headers);
    }


}