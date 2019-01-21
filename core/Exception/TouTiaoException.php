<?php

/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 12:01
 */

namespace core\Exception;

use Exception;

class TouTiaoException extends Exception
{
    /**
     * @var string
     */
    private $errorCode;
    /**
     * @var string
     */
    private $errorMessage;
    /**
     * @var string
     */
    private $errorType;

    /**
     * ClientException constructor.
     *
     * @param $errorMessage
     * @param $errorCode
     */
    public function __construct($errorMessage, $errorCode)
    {
        parent::__construct($errorMessage);
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
        $this->setErrorType('TouTiao');
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * @param $errorType
     */
    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;
    }
}
