<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{


    /**
     * 添加用户
     */
    public function userAdd()
    {
        $validator = Validator::make(
            rq(),
            [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'phone' => 'required|digits:11|unique:users,phone',
                'zip_code' => 'required',
                'address' => 'required|max:255',
                'sex' => 'required|in:0,1',
                'age' => 'required|integer|min:0|max:99',
                'integration' => 'required|integer|min:0|max:10000',
                'qiujing_l' => 'min:0|max:1000',
                'qiujing_r' => 'min:0|max:1000',
                'zhujing_l' => 'min:0|max:1000',
                'zhujing_r' => 'min:0|max:1000',
                'xiajiaguang_l' => 'min:0|max:1000',
                'xiajiaguang_r' => 'min:0|max:1000',
                'tongyuan_l' => 'min:0|max:1000',
                'tongyuan_r' => 'min:0|max:1000',
                'tongjin_l' => 'min:0|max:1000',
                'tongjin_r' => 'min:0|max:1000',
            ],
            [

            ]
        );
        if ($validator->fails())
            return back()->withErrors($validator->messages());

        $user = new User();

        $user->name = rq('name');
        $user->email = rq('email');
        $user->phone = rq('phone');
        $user->sex = rq('sex');
        $user->age = rq('age');
        $user->address = rq('address');
        $user->integration = rq('integration');
        $user->zip_code = rq('zip_code');
        $user->qiujing_l = rq('qiujing_l');
        $user->qiujing_r = rq('qiujing_r');
        $user->zhujing_l = rq('zhujing_l');
        $user->zhujing_r = rq('zhujing_r');
        $user->xiajiaguang_l = rq('xiajiaguang_l');
        $user->xiajiaguang_r = rq('xiajiaguang_r');
        $user->tongyuan_l = rq('tongyuan_l');
        $user->tongyuan_r = rq('tongyuan_r');
        $user->tongjin_l = rq('tongjin_l');
        $user->tongjin_r = rq('tongjin_r');
        $user->save();

        return back()->with('suc_msg', '添加成功');

    }

    /**
     * 删除用户
     */
    public function userDelete()
    {

        $validator = Validator::make(
            rq(),
            [
                'user_id' => 'required|exists:users,id'
            ],
            [

            ]
        );
        if ($validator->fails())
            return back()->with(['err_msg' => $validator->messages()]);

        $user = User::find(rq('user_id'));

        $user->delete();

        return back()->with('suc_msg', '删除成功');

    }

    /**
     * 修改用户积分和验光度数
     */

    public function userEdit()
    {
        $validator = Validator::make(
            rq(),
            [
                'user_id' => 'required|exists:users,id',
                 'degree' => 'required|integer|min:0|max:1000',
                'integration' => 'required|integer|min:0|max:10000'
            ],
            [

            ]
        );
        if ($validator->fails())
            return back()->with(['err_msg' => $validator->messages()]);

        $user = User::find(rq('user_id'));

        $user->degree = rq('degree');
        $user->integration = rq('integration');
        $user->save();

        return back()->with('suc_msg', '修改成功');
    }

    /**
     * 订单添加
     */
    public function orderAdd()
    {


        $validator = Validator::make(
            rq(),
            [
                'user_id' => 'required|exists:users,id',
                'shop' => 'required|string|max:255',
                'product' => 'required|string|max:255',
                'desc' => 'required|string|max:500',
                'price' => 'required|integer|min:0|max:100000'
            ],
            [

            ]
        );
        if ($validator->fails())
            return back()->withErrors($validator->messages());

        $order = new Order();

        $order->user_id = rq('user_id');
        $order->shop = rq('shop');
        $order->product = rq('product');
        $order->desc = rq('desc');
        $order->price = rq('price');
        $order->save();

        return back()->with('suc_msg', '添加成功');

    }

    /**
     * 订单删除
     */
    public function orderDelete()
    {
        $validator = Validator::make(
            rq(),
            [
                'order_id' => 'required|exists:orders,id'
            ],
            [

            ]
        );
        if ($validator->fails())
            return back()->with(['err_msg' => $validator->messages()]);

        $order = Order::find(rq('order_id'));

        $order->delete();

        return back()->with('suc_msg', '删除成功');

    }

}
