<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 下午4:22
 */

namespace App\Middleware;


class Http
{
    public function handle($response)
    {
        return $response;
    }

}