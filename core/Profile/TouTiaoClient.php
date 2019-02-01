<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 16:29
 */

namespace core\Profile;

use core\Exception\InvalidParamException;
use core\Exception\TouTiaoException;
use core\Http\HttpRequest;

class TouTiaoClient
{
    public $access_token;

    public $server_url = 'https://ad.toutiao.com/open_api';

    public $box_url = 'https://test-ad.toutiao.com/open_api';

    public $is_sanbox = false;

    public function __construct($access_token, $is_sanbox = false, $server_url = null, $box_url = null)
    {
        $this->access_token = $access_token;
        $this->is_sanbox = $is_sanbox;
        if (null !== $server_url) $this->server_url = $server_url;
        if (null !== $box_url) $this->box_url = $box_url;
    }

    /**
     * @param RequestInteface $request
     * @param null $url
     * @return \core\Http\HttpResponse
     * @throws TouTiaoException
     */
    public function excute(RequestInteface $request, $url = null)
    {
        $request->check();
        $params = $request->getParams();
        $headers = [
            'Access-Token' => $this->access_token,
            'Content-Type' => $request->getContentType()
        ];
        if (null == $url) {
            $url = $request->getUrl();
            if ('' == $url) {
                throw new InvalidParamException('Http url is required, and now url is \' \'');
            }
            if ("http" != substr($url, 0, 4)) {
                $url = ($this->is_sanbox ? $this->box_url : $this->server_url) . $request->getUrl();
            }
        }
        if (strpos($request->getContentType(), "json") > 0) {
            $params = json_encode($params);
        }
        return HttpRequest::curl($url, $request->getMethod(), $params, $headers);
    }
}