<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', '顧客管理システム')</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      {{-- ロゴ --}}
      <div class="header__title">
        <a href="{{ route('index') }}">顧客管理システム</a>
      </div>
      {{-- メニュー --}}
      <div class="header__nav">
        <nav>
          <ul>
            <li><a href="{{ route('index') }}">社員一覧</a></li>
            <li><a href="{{ route('index') }}">顧客一覧</a></li>
            <li><a href="{{ route('index') }}">顧客新規登録</a></li>
          </ul>
        </nav>
      </div>
      {{-- ログイン, ログアウト --}}
      <div class="header__btn">
        @if (Auth::check())
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="header__btn--logout">ログアウト</button>
        </form>
        @else
        <a href="{{ route('login') }}">
          <button class="header__btn--login">ログイン</button>
        </a>
        @endif
      </div>
    </div>
  </header>
  <main>
    @yield('content')
  </main>
  <footer class="footer">
    <div class="footer__inner">
      <small>&copy; 2024 顧客管理システム</small>
    </div>
  </footer>
</body>
</html>
