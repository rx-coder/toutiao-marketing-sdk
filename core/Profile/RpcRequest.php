<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/21
 * Time: 14:38
 */

namespace core\Profile;

use core\Exception\InvalidParamException;
use core\Exception\TouTiaoException;

class RpcRequest implements RequestInteface
{
    /**
     * request url
     */
    protected $url = '';

    /**
     * request method
     */
    protected $method = 'GET';

    /**
     * request query params or raw body
     */
    protected $params = [];

    /**
     * request header Content-Type
     */
    protected $content_type = 'application/json';

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

    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * @param $attribute
     * @throws InvalidParamException
     */
    public function checkRequred($attribute)
    {
        if (!isset($this->params[$attribute])) {
            $words = explode('_', $attribute);
            $words = array_map('ucfirst', $words);
            $string = implode(' ', $words);
            throw new InvalidParamException($string . 'is required, please check params');
        }
    }
}