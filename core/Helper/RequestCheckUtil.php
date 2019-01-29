<?php
/**
 * User: Sumyf
 * Date: 2019/1/25
 * Time: 16:21
 */

namespace core\Helper;

use core\Exception\InvalidParamException;

class RequestCheckUtil
{
    /**
     * 判断参数是否为空
     *
     * @param $value
     * @param $fieldName
     * @throws InvalidParamException
     */
    public static function checkNotNull($value, $fieldName)
    {

        if (self::checkEmpty($value)) {
            throw new InvalidParamException("client-check-error:Missing Required Arguments: " . $fieldName, 40);
        }
    }

    /**
     * 限制字符串参数的长度
     *
     * @param $value
     * @param $maxLength
     * @param $fieldName
     * @throws InvalidParamException
     */
    public static function checkMaxLength($value, $maxLength, $fieldName)
    {
        if (!self::checkEmpty($value) && mb_strlen($value, "UTF-8") > $maxLength) {
            throw new InvalidParamException("client-check-error:Invalid Arguments:the length of " . $fieldName . " can not be larger than " . $maxLength . ".", 41);
        }
    }

    /**
     * 限制数组的最大长度
     *
     * @param $value
     * @param $maxSize
     * @param $fieldName
     * @throws InvalidParamException
     */
    public static function checkMaxListSize($value, $maxSize, $fieldName)
    {

        if (self::checkEmpty($value))
            return;

        $list = preg_split("/,/", $value);
        if (count($list) > $maxSize) {
            throw new InvalidParamException("client-check-error:Invalid Arguments:the listsize(the string split by \",\") of " . $fieldName . " must be less than " . $maxSize . " .", 41);
        }
    }

    /**
     * 限制允许字段
     * @param $value
     * @param $array
     * @param $fieldName
     * @throws InvalidParamException
     */
    public static function checkAllowField($value, $array, $fieldName)
    {
        if (self::checkEmpty($value))
            return;

        if (!in_array($value, $array)) {
            throw new InvalidParamException("client-check-error:AllowField of " . $fieldName . "   .", 41);
        }

    }

    /**
     *
     *
     * @param $value
     * @param $maxValue
     * @param $fieldName
     * @throws InvalidParamException
     */
    public static function checkMaxValue($value, $maxValue, $fieldName)
    {

        if (self::checkEmpty($value))
            return;

        self::checkNumeric($value, $fieldName);

        if ($value > $maxValue) {
            throw new InvalidParamException("client-check-error:Invalid Arguments:the value of " . $fieldName . " can not be larger than " . $maxValue . " .", 41);
        }
    }

    /**
     * @param $value
     * @param $minValue
     * @param $fieldName
     * @throws InvalidParamException
     */
    public static function checkMinValue($value, $minValue, $fieldName)
    {

        if (self::checkEmpty($value))
            return;

        self::checkNumeric($value, $fieldName);

        if ($value < $minValue) {
            throw new InvalidParamException("client-check-error:Invalid Arguments:the value of " . $fieldName . " can not be less than " . $minValue . " .", 41);
        }
    }

    /**
     * @param $value
     * @param $fieldName
     * @throws InvalidParamException
     */
    protected static function checkNumeric($value, $fieldName)
    {
        if (!is_numeric($value))
            throw new InvalidParamException("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not number : " . $value . " .", 41);
    }

    /**
     * @param $value
     * @return bool
     */
    public static function checkEmpty($value)
    {
        if (!isset($value))
            return true;
        if ($value === null)
            return true;
        if (is_array($value) && count($value) == 0)
            return true;
        if (is_string($value) && trim($value) === "")
            return true;

        return false;
    }

}