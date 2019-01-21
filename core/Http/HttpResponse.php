<?php

/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/1/15
 * Time: 10:01
 */
namespace core\Http;
class HttpResponse
{
    /**
     * @var string
     */
    private $body;
    /**
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return 200 <= $this->status && 300 > $this->status;
    }
}
