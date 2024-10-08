<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);

        /**
         * ユーザー登録画面
         *
         * @return \Illuminate\View\View
         */
        Fortify::registerView(function () {
            return view('auth.register');
        });

        /**
         * ログイン画面
         *
         * @return \Illuminate\View\View
         */
        Fortify::loginView(function () {
            return view('auth.login');
        });

        /**
         * 認証機能
         */
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();

            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        /**
         * パスワードリセット画面
         *
         * @return \Illuminate\View\View
         */
        Fortify::requestPasswordResetLinkView(function () {
            return view('forgot-password');
        });

        /**
         * パスワードリセット画面
         *
         * @return \Illuminate\View\View
         */
        Fortify::resetPasswordView(function () {
            return view('reset-password');
        });

        /**
         * ログインのレートリミット
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Cache\RateLimiting\Limit
         */
        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(10)->by($email.$request->ip());
        });
    }
}
