<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //------------------------------以下为公用方法----------------------------------------//

    /**
     * @desc 封闭curl的调用接口，get的请求方式。
     */
    function doCurlGetRequest($url, $data, $timeout = 5)
    {
        if ($url == "" || $timeout <= 0) {
            return false;
        }
        $url = $url . '?' . http_build_query($data);

        $con = curl_init((string)$url);
        curl_setopt($con, CURLOPT_HEADER, false);
        curl_setopt($con, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($con, CURLOPT_TIMEOUT, (int)$timeout);

        return curl_exec($con);
    }
}
