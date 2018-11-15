<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    /**
     * 首页
     */
    public function index()
    {
        return view('index');
    }

    /**
     * 关于我
     */
    public function aboutMe(Request $request)
    {
        if (!isset($_COOKIE['phone']))
            return redirect('page/login');

        $user = User::where(['phone' => $request->cookie('phone')])->first();

        return view('about-me')->with(compact('user'));
    }

    /**
     * 我的订单
     */
    public function myOrders(Request $request)
    {
        if (!isset($_COOKIE['phone']))
            return redirect('page/login');
        $user = User::where(['phone' => $request->cookie('phone')])->first();
        $orders = Order::where(['user_id' => $user->id])->get();


        return view('my-orders')->with(compact('orders'));
    }


    /**
     * 我的积分
     */
    public function integration(Request $request)
    {
        if (!isset($_COOKIE['phone']))
            return redirect('page/login');

        $user = User::where(['phone' => $request->cookie('phone')])->first();

        return view('integration')->with(compact('user'));
    }


    /**
     * 验光度数
     */
    public function degree(Request $request)
    {
        if (!isset($_COOKIE['phone']))
            return redirect('page/login');

        $user = User::where(['phone' => $request->cookie('phone')])->first();

        return view('degree')->with(compact('user'));
    }

    /**
     * 登陆
     */
    public function login()
    {
        return view('login');
    }


    /**
     * 测试页面
     */
    public function test(Request $request){

//        $request->session()->put('key', 'value1');

        $value = $request->session()->get('check_code');
//        $request->session()->forget('key');
        dd($value);
//        return 1;
    }

}
