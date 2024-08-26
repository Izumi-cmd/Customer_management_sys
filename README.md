# 顧客管理システム

## 機能
- 社員がログインする
- 社員はリーダーやメンバーなどの役職を持つ
- 社員は顧客を登録、検索して顧客詳細情報を見ることができる。
- 顧客の履歴を入力・一覧表示できる。
- 社員は店舗に所属する。

## ポイント
認証機能はLaravel Fortifyを使用します。
初期値の設定はマイグレーションファイルではなく、シーディングで設定します。

## 環境構築
1. gitからリポジトリを取得する

2. dockerコンテナを起動
docker-compose up -d --build

3. 起動中のphpコンテナにアクセス
docker-compose exec -it php bash

4. 環境設定をコピーしアプリケーションキーを作成する
cp .env.example .env
php artisan key:generate

5. 依存パッケージをインストール、アップデートする
composer install
composer update

6. DBのマイグレーションを実施
php artisan migrate

7. 初期データをシーディングする。
php artisan db:seed
