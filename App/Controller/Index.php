<?php

namespace App\Controller;

use App\Services\DingDing\DingRobot;

class Index
{
    function test()
    {
        $ding = new DingRobot();
        $ding->init([
            'token' => '6c03e7fe989568bf4e76291c9754aa8378e08bb430c9f2670615c87a6244e2c0',
            'keyWords' => '主人'
        ]);
        $res = $ding->send('请吩咐~');
        dd($res);
    }
}

?>