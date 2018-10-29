<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\FacaduserEdites\Cookies;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    //测试


    /**
     * 根据手机号查询订单
     */
    function getOrderListByPhone(){
        $validator = Validator::make(
            rq(),
            [
                'phone' => 'required|exists:users,phone',
            ],
            [
                'phone.required' => '请输入手机号',
                'phone.exists' => '该手机号没有消费记录'
            ]
        );
        if ($validator->fails())
            return err(1,$validator->messages());

        $user = User::where('phone',rq('phone'))->first();

        $orderList = Order::where(['user_id'=> $user->id])->with('user')->get();

        return suc($orderList);
    }

    /**
     * 根据手机号用户
     */
    function getUserByPhone(){
        $validator = Validator::make(
            rq(),
            [
                'phone' => 'required|exists:users,phone',
            ],
            [
                'phone.required' => '请输入手机号',
                'phone.exists' => '该手机号没有消费记录'
            ]
        );
        if ($validator->fails())
            return err(1,$validator->messages());

        $user = User::where('phone',rq('phone'))->first();

        return suc($user);

    }

    /**
     * 微信回調接口
     */
    public function weixinCallback()
    {

        $timestamp = rq('timestamp');
        $nonce = rq('nonce');
        $signature = rq('signature');


        $tmpArr = array(timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if ($signature) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * 登录
     */
    public function login()
    {

        $validator = Validator::make(
            rq(),
            [
                'phone' => 'required|exists:users,phone',
            ],
            [
                'phone.required' => '请输入手机号',
                'phone.exists' => '该手机号未注册',
            ]
        );
        if ($validator->fails())
            return back()->with('err_msg', $validator->messages());



        $foreverCookie = Cookie::forever('phone', rq('phone'));

        return redirect('page/index')->withCookie($foreverCookie);
    }


    /**
     * 修改用户信息
     */
    public function editUser(){

          $validator = Validator::make(
            rq(),
            [
                'user_id' => 'required|exists:users,id',
                'name' => 'required|exists:users,name',
                'phone' => 'required|exists:users,phone',
                'email' => 'required|exists:users,email',
            ],
            [
                'phone.required' => '请输入手机号',
                'phone.exists' => '该手机号未注册',
            ]
        );
        if ($validator->fails())
            return back()->with('err_msg', $validator->messages());

        $user = User::find(rq('user_id'));
        $user->name = rq('name');
        $user->phone= rq('phone');
        $user->email = rq('email');

        $user->save();

        return suc(1);

    }

  
}
