<?php

/*******************************
 *
 *
 * services 基类
 *
 *
 *******************************/

namespace App\Services;

class Base
{
    public function fmtRes($code, $msg, $data = [])
    {
        return [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ];
    }
}
