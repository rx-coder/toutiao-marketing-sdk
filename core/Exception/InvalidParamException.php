<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/21
 * Time: 15:09
 */

namespace core\Exception;

class InvalidParamException extends TouTiaoException
{
    public function __construct($errorMessage, $errorCode = 500)
    {
        parent::__construct($errorMessage, $errorCode);
    }
}