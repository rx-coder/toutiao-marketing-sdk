<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/21
 * Time: 14:38
 */

namespace core\Profile;

class RpcRequest implements RequestInteface
{
    /**
     * request url
     */
    private $url = '';

    /**
     * request method
     */
    private $method = 'GET';

    /**
     * request query params or raw body
     */
    private $params = [];

    /**
     * request header
     */
    private $headers = [];

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function addParam($key, $value)
    {
        $this->params[$key] = $value;
        return $this;
    }

    public function setParams($array)
    {
        $this->params = $array;
        return $this;
    }

    public function setHeaders($array)
    {
        $this->headers = $array;
        return $this;
    }

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}