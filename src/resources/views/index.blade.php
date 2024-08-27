@extends('layouts.app')
@section('css', 'index')

@section('title', '顧客管理システム')

@section('content')
<div class="container">
  <div class="container__title">
    <h1>顧客管理システム</h1>
  </div>
  <div class="container__body">
    <article class="container__body-article">
      <p>社員一覧</p>
    </article>
    <article class="container__body-article">
      <p>顧客一覧</p>
    </article>
    <article class="container__body-article">
      <p>顧客新規登録</p>
    </article>
  </div>
</div>
@endsection
