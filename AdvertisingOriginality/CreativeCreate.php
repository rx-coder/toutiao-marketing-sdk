<?php
/**
 * 创建广告创意
 * https://ad.toutiao.com/openapi/doc/index.html?id=143
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 10:27
 */
namespace AdvertisingOriginality;

use core\Profile\RpcRequest;

class CreativeCreate extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/creative/create_v2/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    private $advertiser_id;

    /**
     * 计划ID
     */
    private $ad_id;

    /**
     * (可选)
     * 展示监测链接
     */
    private $track_url;

    /**
     * (可选)
     * 点击监测链接
     */
    private $action_track_url;

    /**
     * (可选)
     * 视频有效播放监测链接
     */
    private $video_play_effective_track_url;

    /**
     * (可选)
     * 视频播放完毕监测链接
     */
    private $video_play_done_track_url;

    /**
     * (可选)
     * 视频播放监测链接
     */
    private $video_play_track_url;

    /**
     * (可选)
     * 是否关闭评论
     * 允许值: 0, 1
     */
    private $is_comment_disable;

    /**
     * (可选)
     * 是否关闭视频详情页落地页(勾选该选项后,视频详情页中不默认弹出落地页,仅对视频广告生效)
     * 允许值: 0, 1
     */
    private $close_video_detail;

    /**
     * (可选)
     * 创意展现方式
     * 允许值: "CREATIVE_DISPLAY_MODE_CTR", "CREATIVE_DISPLAY_MODE_RANDOM"
     */
    private $creative_display_mode;

    /**
     * (可选)
     * 是否使用优选广告位，0表示不使用优选，1表示使用，使用优选广告位的时候默认忽略inventory_type字段。
     * 默认值: 0
     * 允许值: 0, 1
     */
    private $smart_inventory;

    /**
     * 创意投放位置
     */
    private $inventory_type;

    /**
     * (可选)
     * 文章来源
     */
    private $source;

    /**
     * (可选)
     * 应用名(当推广应用下载[包含Android、iOS]时, 必填)
     */
    private $app_name;

    /**
     * (可选)
     * Android应用下载详情页(当推广应用下载Android时, 必填)
     */
    private $web_url;

    /**
     * 创意标签(以英文逗号分隔,最多20个标签,且每个标签长度不超过10个字符)
     */
    private $ad_keywords;

    /**
     * 创意分类-三级行业
     */
    private $third_industry_id;

    /**
     * (可选)
     * 附加创意类型(仅当推广目的landing_type=LINK时,填写)
     * 允许值: "ATTACHED_CREATIVE_NONE", "ATTACHED_CREATIVE_PHONE","ATTACHED_CREATIVE_FORM"
     */
    private $advanced_creative_type;

    /**
     * (可选)
     * 副标题
     */
    private $advanced_creative_title;

    /**
     * (可选)
     * 电话号码
     */
    private $phone_number;

    /**
     * (可选)
     * 按钮文本
     */
    private $button_text;

    /**
     * (可选)
     * 表单提交链接
     * (当附加创意类型为ATTACHED_CREATIVE_FORM时, 必填, 切当附加创意类型为当附加创意类型为ATTACHED_CREATIVE_FORM时, 必须为今日头条建站地址)
     */
    private $form_url;

    /**
     * (可选)
     * 创意类型，该字段为STATIC_ASSEMBLE表示程序化创意，其他情况无该字段。
     * （请注意：如果投放程序化创意，标题和素材使用的是下面title_list与image_list 部分的字段）
     */
    private $creative_material_mode;

    /**
     * (可选)
     * 标题信息，程序化创意必填，字段说明见下表。最多包含10个标题。
     */
    private $title_list;

    /**
     * (可选)
     * 素材信息，程序化创意必填，字段说明见下表。最多包含12张图和6个视频。
     */
    private $image_list;

    /**
     * 素材信息, 投放位置和创意类型决定素材规格。以下为字段说明。当为程序化创意时，该字段不填数据，值为[]
     */
    private $creatives;

    /**
     * @param mixed $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @param mixed $ad_id
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->params["ad_id"] = $ad_id;
        $this->ad_id = $ad_id;
        return $this;
    }

    /**
     * @param mixed $track_url
     * @return $this
     */
    public function setTrackUrl($track_url)
    {
        $this->params["track_url"] = $track_url;
        $this->track_url = $track_url;
        return $this;
    }

    /**
     * @param mixed $action_track_url
     * @return $this
     */
    public function setActionTrackUrl($action_track_url)
    {
        $this->params["action_track_url"] = $action_track_url;
        $this->action_track_url = $action_track_url;
        return $this;
    }

    /**
     * @param mixed $video_play_effective_track_url
     * @return $this
     */
    public function setVideoPlayEffectiveTrackUrl($video_play_effective_track_url)
    {
        $this->params["video_play_effective_track_url"] = $video_play_effective_track_url;
        $this->video_play_effective_track_url = $video_play_effective_track_url;
        return $this;
    }

    /**
     * @param mixed $video_play_done_track_url
     * @return $this
     */
    public function setVideoPlayDoneTrackUrl($video_play_done_track_url)
    {
        $this->params["video_play_done_track_url"] = $video_play_done_track_url;
        $this->video_play_done_track_url = $video_play_done_track_url;
        return $this;
    }

    /**
     * @param mixed $video_play_track_url
     * @return $this
     */
    public function setVideoPlayTrackUrl($video_play_track_url)
    {
        $this->params["video_play_track_url"] = $video_play_track_url;
        $this->video_play_track_url = $video_play_track_url;
        return $this;
    }

    /**
     * @param mixed $is_comment_disable
     * @return $this
     */
    public function setIsCommentDisable($is_comment_disable)
    {
        $this->params["is_comment_disable"] = $is_comment_disable;
        $this->is_comment_disable = $is_comment_disable;
        return $this;
    }

    /**
     * @param mixed $close_video_detail
     * @return $this
     */
    public function setCloseVideoDetail($close_video_detail)
    {
        $this->params["close_video_detail"] = $close_video_detail;
        $this->close_video_detail = $close_video_detail;
        return $this;
    }

    /**
     * @param mixed $creative_display_mode
     * @return $this
     */
    public function setCreativeDisplayMode($creative_display_mode)
    {
        $this->params["creative_display_mode"] = $creative_display_mode;
        $this->creative_display_mode = $creative_display_mode;
        return $this;
    }

    /**
     * @param mixed $smart_inventory
     * @return $this
     */
    public function setSmartInventory($smart_inventory)
    {
        $this->params["smart_inventory"] = $smart_inventory;
        $this->smart_inventory = $smart_inventory;
        return $this;
    }

    /**
     * @param mixed $inventory_type
     * @return $this
     */
    public function setInventoryType(array $inventory_type)
    {
        $this->params["inventory_type"] = $inventory_type;
        $this->inventory_type = $inventory_type;
        return $this;
    }

    /**
     * @param mixed $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->params["source"] = $source;
        $this->source = $source;
        return $this;
    }

    /**
     * @param mixed $app_name
     * @return $this
     */
    public function setAppName($app_name)
    {
        $this->params["app_name"] = $app_name;
        $this->app_name = $app_name;
        return $this;
    }

    /**
     * @param mixed $web_url
     * @return $this
     */
    public function setWebUrl($web_url)
    {
        $this->params["web_url"] = $web_url;
        $this->web_url = $web_url;
        return $this;
    }

    /**
     * @param mixed $ad_keywords
     * @return $this
     */
    public function setAdKeywords(array $ad_keywords)
    {
        $this->params["ad_keywords"] = $ad_keywords;
        $this->ad_keywords = $ad_keywords;
        return $this;
    }

    /**
     * @param mixed $third_industry_id
     * @return $this
     */
    public function setThirdIndustryId($third_industry_id)
    {
        $this->params["third_industry_id"] = $third_industry_id;
        $this->third_industry_id = $third_industry_id;
        return $this;
    }

    /**
     * @param mixed $advanced_creative_type
     * @return $this
     */
    public function setAdvancedCreativeType($advanced_creative_type)
    {
        $this->params["advanced_creative_type"] = $advanced_creative_type;
        $this->advanced_creative_type = $advanced_creative_type;
        return $this;
    }

    /**
     * @param mixed $advanced_creative_title
     * @return $this
     */
    public function setAdvancedCreativeTitle($advanced_creative_title)
    {
        $this->params["advanced_creative_title"] = $advanced_creative_title;
        $this->advanced_creative_title = $advanced_creative_title;
        return $this;
    }

    /**
     * @param mixed $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->params["phone_number"] = $phone_number;
        $this->phone_number = $phone_number;
        return $this;
    }

    /**
     * @param mixed $button_text
     * @return $this
     */
    public function setButtonText($button_text)
    {
        $this->params["button_text"] = $button_text;
        $this->button_text = $button_text;
        return $this;
    }

    /**
     * @param mixed $form_url
     * @return $this
     */
    public function setFormUrl($form_url)
    {
        $this->params["form_url"] = $form_url;
        $this->form_url = $form_url;
        return $this;
    }

    /**
     * @param mixed $creative_material_mode
     * @return $this
     */
    public function setCreativeMaterialMode($creative_material_mode)
    {
        $this->params["creative_material_mode"] = $creative_material_mode;
        $this->creative_material_mode = $creative_material_mode;
        return $this;
    }

    /**
     * @param mixed $title_list
     * @return $this
     */
    public function setTitleList($title_list)
    {
        $this->params["title_list"] = $title_list;
        $this->title_list = $title_list;
        return $this;
    }

    /**
     * @param mixed $image_list
     * @return $this
     */
    public function setImageList($image_list)
    {
        $this->params["image_list"] = $image_list;
        $this->image_list = $image_list;
        return $this;
    }

    /**
     * @param mixed $creatives
     * @return $this
     */
    public function setCreatives($creatives)
    {
        $this->params["creatives"] = $creatives;
        $this->creatives = $creatives;
        return $this;
    }
}