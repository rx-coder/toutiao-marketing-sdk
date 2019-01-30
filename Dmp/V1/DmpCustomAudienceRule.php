<?php
/**
 * 规则人群包
 * https://ad.toutiao.com/openapi/doc/index.html?id=190
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 17:21
 */

namespace Dmp\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudienceRule extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/rule/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 人群包标签 字符串长度取值范围: 1..20
     * @var string $tag
     */
    private $tag;

    /**
     * 人群包名称
     * 字符串长度取值范围: 1..20
     * @var string $name
     */
    private $name;

    /**
     * DMP规则类型，详见【附录-DMP规则类型】
     * @var string $profile_type
     */
    private $profile_type;

    /**
     * DMP规则描述，数组
     * @var array $profiles
     */
    private $profiles;

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->params["tag"] = $tag;
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->params["name"] = $name;
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileType()
    {
        return $this->profile_type;
    }

    /**
     * @param string $profile_type
     * @return $this
     */
    public function setProfileType($profile_type)
    {
        $this->params["profile_type"] = $profile_type;
        $this->profile_type = $profile_type;
        return $this;
    }

    /**
     * @return array
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * @param array $profiles
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->params["profiles"] = $profiles;
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->tag, 'tag');
        RequestCheckUtil::checkNotNull($this->name, 'name');
        RequestCheckUtil::checkNotNull($this->profile_type, 'profile_type');
        RequestCheckUtil::checkNotNull($this->profiles, 'profiles');
    }
}