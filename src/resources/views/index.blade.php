@extends('layouts.app')

@section('title', '顧客管理システム')

@section('content')
<div class="container">
  <div class="container__title">
    <h1 class="container__title__text">顧客管理システム</h1>
  </div>
  <div class="container__body">
    <ul class="container__body__list">
      <li class="container__body__list__item">
        <a href="{{ route('users.index') }}" class="container__body__list__item__link">社員一覧</a>
      </li>
      <li class="container__body__list__item">
        <a href="" class="container__body__list__item__link">役職一覧</a>
      </li>
      <li class="container__body__list__item">
        <a href="" class="container__body__list__item__link">顧客一覧</a>
      </li>
    </ul>
  </div>
</div>
@endsection
