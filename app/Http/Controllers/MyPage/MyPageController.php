<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\AuthProtectedController;

class MyPageController extends AuthProtectedController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mypage/myPage');
    }
}
