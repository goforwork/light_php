<?php

/*******************************
 *
 *
 * 钉钉机器人服务
 *
 *
 *******************************/

namespace App\Services\DingDing;

use App\Services\Base;

class DingRobot extends Base
{
    private $token    = null;
    private $keyWords = null;

    const DING_URL = 'https://oapi.dingtalk.com/robot/send?access_token=';

    /**
     * 初始化钉钉机器人
     *
     * @param [type] $opts
     * @return void
     */
    public function init($opts)
    {
        $this->token                               = $opts['token'];
        isset($opts['keyWords']) ? $this->keyWords = '[' . $opts['keyWords'] . ']' : '';
    }

    /**
     * 发送消息
     *
     * @return void
     */
    public function send($msg)
    {
        $res = curl_request(
            self::DING_URL . $this->token,
            'POST',
            json_encode([
                'msgtype' => 'text',
                'text'    => [
                    'content' => $this->keyWords . $msg,
                ],
            ]),
            ['Content-Type: application/json;charset=utf-8']
        );

        return $this->fmtRes($res['errcode'], $res['errmsg']);
    }
}
