<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/21
 * Time: 14:38
 */

namespace core\Profile;

use core\Exception\TouTiaoException;
use ToutiaoSdk\TouTiaoClient;

class RpcRequest implements RequestInteface
{
    /**
     * @var TouTiaoClient
     */
    private $client;

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

    /**
     * RpcRequest constructor.
     * @param null $client
     */
    public function __construct($client = null)
    {
        $this->client = $client;
    }

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
        $this->$key = $value;
        return $this;
    }

    public function setParams($array)
    {
        $this->params = $array;
        foreach ($array as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    public function getContentType()
    {
        return $this->content_type;
    }

    public function check()
    {
        // TODO: Implement check() method.
    }

    /**
     * @return \core\Http\HttpResponse
     * @throws TouTiaoException
     */
    public function send()
    {
        if (!$this->client instanceof TouTiaoClient) {
            throw new TouTiaoException('Request can not be send by null, TouTiaoClent`s instance should be set before send', 500);
        }
        return $this->client->excute($this);
    }
}