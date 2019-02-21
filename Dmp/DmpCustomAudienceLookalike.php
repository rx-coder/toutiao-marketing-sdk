<?php
/**
 * 拓展人群包
 * https://ad.toutiao.com/openapi/doc/index.html?id=81
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 16:10
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudienceLookalike extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/lookalike/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 目标人群包ID（从哪个人群包进行扩展，目标人群包不能是扩展人群包）
     * @var int $custom_audience_id
     */
    protected $custom_audience_id;

    /**
     * 人群包标签，即人群分组，您可以自定义，用于给拓展后的人群包打标签便于您分类管理。
     * 字符串长度取值范围: 1..20
     * @var string $tag
     */
    protected $tag;

    /**
     * 人群包名称
     * 字符串长度取值范围: 1..20
     * @var string $name
     */
    protected $name;

    /**
     * 扩展数量
     * 取值范围: 1-10000000
     * @var int $lookalike_num
     */
    protected $lookalike_num;

    /**
     * 扩展设备，NONE为不限
     * 默认值: NONE
     * 允许值: "NONE", "IOS", "ANDROID"
     * @var string $platform
     */
    protected $platform;

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
     * @return int
     */
    public function getCustomAudienceId()
    {
        return $this->custom_audience_id;
    }

    /**
     * @param int $custom_audience_id
     * @return $this
     */
    public function setCustomAudienceId($custom_audience_id)
    {
        $this->params["custom_audience_id"] = $custom_audience_id;
        $this->custom_audience_id = $custom_audience_id;
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
     * @return int
     */
    public function getLookalikeNum()
    {
        return $this->lookalike_num;
    }

    /**
     * @param int $lookalike_num
     * @return $this
     */
    public function setLookalikeNum($lookalike_num)
    {
        $this->params["lookalike_num"] = $lookalike_num;
        $this->lookalike_num = $lookalike_num;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->params["platform"] = $platform;
        $this->platform = $platform;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->custom_audience_id, 'custom_audience_id');
        RequestCheckUtil::checkNotNull($this->tag, 'tag');
        RequestCheckUtil::checkNotNull($this->name, 'name');
        RequestCheckUtil::checkNotNull($this->lookalike_num, 'lookalike_num');
    }
}