<?php
/**
 * 查询受众预估结果
 * https://ad.toutiao.com/openapi/doc/index.html?id=104
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 14:55
 */

namespace Tool\QueryTool\V1;

use core\Profile\RpcRequest;

class ToolsEstimateAudience extends RpcRequest
{
    protected $url = '/2/tools/estimate_audience/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 定向人群包类型,详见【附录-定向人群包类型】
     * 允许值: "RETARGETING_INCLUDE", "RETARGETING_EXCLUDE","RETARGETING_NONE"
     * @var string $retargeting_type
     */
    private $retargeting_type;

    /**
     * 当选择使用人群包定向时填写，内容为人群包id
     * @var array $retargeting_tags
     */
    private $retargeting_tags;

    /**
     * 受众性别, 详见【附录-受众性别】
     * 允许值: "GENDER_FEMALE", "GENDER_MALE"
     * @var string $gender
     */
    private $gender;

    /**
     * 受众年龄区间, 详见【附录-受众年龄区间】
     * 允许值: "AGE_BELOW_18", "AGE_BETWEEN_18_23", "AGE_BETWEEN_24_30","AGE_BETWEEN_31_40", "AGE_BETWEEN_41_49", "AGE_ABOVE_50"
     * @var array $age
     */
    private $age;

    /**
     * 受众最低ios版本(当推广应用下载iOS时选填,其余情况不填), 详见【附录-受众ios版本】
     * 允许值: "0.0", "4.0", "4.1", "4.2", "4.3", "5.0", "5.1", "6.0", "7.0","7.1", "8.0", "8.1", "8.2", "9.0"
     * @var string $ios_osv
     */
    private $ios_osv;

    /**
     * 受众运营商, 详见【附录-受众运营商类型】
     * 允许值: "MOBILE", "UNICOM", "TELCOM"
     * @var array $carrier
     */
    private $carrier;

    /**
     * 受众网络类型, 详见【附录-受众网络类型】
     * 允许值: "WIFI", "2G", "3G", "4G"
     * @var array $ac
     */
    private $ac;

    /**
     * 受众手机品牌, 详见【附录-手机品牌】
     * 允许值: "APPLE", "HUAWEI", "XIAOMI", "SAMSUNG", "OPPO", "VIVO","MEIZU",
     * "GIONEE", "COOLPAD", "LENOVO", "LETV", "ZTE","CHINAMOBILE", "HTC", "PEPPER",
     * "NUBIA", "HISENSE", "QIKU", "TCL","SONY", "SMARTISAN", "360", "ONEPLUS", "LG",
     * "MOTO", "NOKIA","GOOGLE"
     * @var array $device_brand
     */
    private $device_brand;

    /**
     * 用户首次激活时间, 详见【附录-用户首次激活时间】
     * 允许值: "WITH_IN_A_MONTH", "ONE_MONTH_2_THREE_MONTH","THREE_MONTH_EAILIER"
     * @var array $activate_type
     */
    private $activate_type;

    /**
     *
     * 受众平台(当推广目的landing_type=APP时,不填,且为保证投放效果,平台类型定向PC与移动端互斥), 详见【附录-受众平台类型】
     * 允许值: "ANDROID", "IOS", "PC"
     * @var array $platform
     */
    private $platform;

    /**
     * @return string
     */
    public function getRetargetingType()
    {
        return $this->retargeting_type;
    }

    /**
     * @param string $retargeting_type
     * @return $this
     */
    public function setRetargetingType($retargeting_type)
    {
        $this->params["retargeting_type"] = $retargeting_type;
        $this->retargeting_type = $retargeting_type;
        return $this;
    }

    /**
     * @return array
     */
    public function getRetargetingTags()
    {
        return $this->retargeting_tags;
    }

    /**
     * @param array $retargeting_tags
     * @return $this
     */
    public function setRetargetingTags($retargeting_tags)
    {
        $this->params["retargeting_tags"] = $retargeting_tags;
        $this->retargeting_tags = $retargeting_tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->params["gender"] = $gender;
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return array
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param array $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->params["age"] = $age;
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosOsv()
    {
        return $this->ios_osv;
    }

    /**
     * @param string $ios_osv
     * @return $this
     */
    public function setIosOsv($ios_osv)
    {
        $this->params["ios_osv"] = $ios_osv;
        $this->ios_osv = $ios_osv;
        return $this;
    }

    /**
     * @return array
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param array $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->params["carrier"] = $carrier;
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return array
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * @param array $ac
     * @return $this
     */
    public function setAc($ac)
    {
        $this->params["ac"] = $ac;
        $this->ac = $ac;
        return $this;
    }

    /**
     * @return array
     */
    public function getDeviceBrand()
    {
        return $this->device_brand;
    }

    /**
     * @param array $device_brand
     * @return $this
     */
    public function setDeviceBrand($device_brand)
    {
        $this->params["device_brand"] = $device_brand;
        $this->device_brand = $device_brand;
        return $this;
    }

    /**
     * @return array
     */
    public function getActivateType()
    {
        return $this->activate_type;
    }

    /**
     * @param array $activate_type
     * @return $this
     */
    public function setActivateType($activate_type)
    {
        $this->params["activate_type"] = $activate_type;
        $this->activate_type = $activate_type;
        return $this;
    }

    /**
     * @return array
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param array $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->params["platform"] = $platform;
        $this->platform = $platform;
        return $this;
    }
}


