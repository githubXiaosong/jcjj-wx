<?php

function rq($key = null)
{
    return ($key == null) ? \Illuminate\Support\Facades\Request::all() : \Illuminate\Support\Facades\Request::get($key);
}

/**
 * @param null $data
 * @return array 成功返回0
 */
function suc($data = null)
{
    $ram = ['status' => 0];
    if ($data) {
        $ram['data'] = $data;
        return $ram;
    }
    return $ram;
}

/**
 * @param $code
 * @param null $data
 * @return array 失败返回错误码和信息
 */
function err($code, $data = null)
{
    if ($data)
        return ['status' => $code, 'data' => $data];
    return ['status' => $code];
}


Route::group(['middleware' => 'web'], function () {

    Route::get('test', 'PageController@test');//测试


    Route::group(['prefix' => 'page'], function () {

        Route::get('index', 'PageController@index');
        Route::get('aboutMe', 'PageController@aboutMe');
        Route::get('myOrders', 'PageController@myOrders');
        Route::get('integration', 'PageController@integration');
        Route::get('degree', 'PageController@degree');
        Route::get('login', 'PageController@login');

    });

    Route::group(['prefix' => 'api'], function () {
        Route::post('getOrderListByPhone', 'ApiController@getOrderListByPhone');
        Route::post('getUserByPhone', 'ApiController@getUserByPhone');
        Route::post('login', 'ApiController@login');

    });


    Route::group(['prefix' => 'admin'], function () {

        Route::group(['prefix' => 'page'], function () {

            Route::get('index', 'Admin\PageController@index');
            Route::get('userList', 'Admin\PageController@userList');
            Route::get('userAdd', 'Admin\PageController@userAdd');
            Route::get('userEdit/{user_id}', 'Admin\PageController@userEdit');
            Route::get('orderList', 'Admin\PageController@orderList');
            Route::get('orderAdd', 'Admin\PageController@orderAdd');

        });

        Route::group(['prefix' => 'api'], function () {

            Route::post('userAdd', 'Admin\ApiController@userAdd');
            Route::post('userEdit', 'Admin\ApiController@userEdit');
            Route::post('orderAdd', 'Admin\ApiController@orderAdd');
            Route::post('userDelete', 'Admin\ApiController@userDelete');
            Route::post('orderDelete', 'Admin\ApiController@orderDelete');

            Route::post('weixinCallback', 'Admin\ApiController@weixinCallback');
        });
    });
});



