<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * ユーザー登録画面
     */
    public function register(Request $request)
    {
        return view('register');
    }

    /**
     * ログイン画面
     * @Todo ログイン処理とポリシーを作成する
     *
     */
    public function login(Request $request)
    {
        return view('index');
    }

    /**
     * ログアウト処理
     * @todo ログインユーザーのログアウト処理を作成する
     *
     */
    public function logout(Request $request)
    {
        return redirect()->route('index');
    }
}
