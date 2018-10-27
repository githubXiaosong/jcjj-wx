<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use App\Video;

class PageController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }


    public function userList()
    {

        $userList = User::get();

        return view('admin.user-list')->with(compact('userList'));
    }


    public function userAdd()
    {

        return view('admin.user-add');

    }


    public function userEdit($user_id)
    {

        $user = User::find($user_id);
        return view('admin.user-edit')->with(compact('user'));

    }


    public function orderList()
    {


        $orderList = Order::with('user')->get();

        return view('admin.order-list')->with(compact('orderList'));
    }


    public function orderAdd()
    {

        $users = User::get();

        return view('admin.order-add')->with(compact('users'));
    }


}
