@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
<div class="user__content">
  <div class="user-list__heading">
    <h2>店員一覧</h2>
  </div>

  <div class="user-list__items">
      {{-- ユーザー新規登録ボタン --}}
    <div class="user-create">
      <a href="" class="user-create__link"> 店員 新規登録</a>
    </div>
      {{-- 検索 --}}
    <div class="user-search">
      <details>
        <summary>検索</summary>
        <form action="" method="get" class="user-search__form">
          <input type="text" name="search" placeholder="検索キーワードを入力">
          <select name="shop_id">
            <option value="">店舗</option>
          </select>
          <select name="role_id">
            <option value="">役職</option>
          </select>
          <button type="submit" class="user-search__button button">検索</button>
        </form>
      </details>
    </div>
  </div>

  {{-- 社員一覧 --}}
  <div class="user-list__content">
    <table class="user-list__table">
      <thead>
        <tr>
          <th>名前</th>
          <th>メールアドレス</th>
          <th>店舗</th>
          <th>役職</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->shop->name }}</td>
          <td>{{ $user->role->name }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
