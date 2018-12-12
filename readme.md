# このリポジトリについて

Eloquentのリレーションについて、動作確認を手軽に行うためのリポジトリです。
リレーションメソッドが実際にどういったSQLを発行するのか確認するのに活用できます。

すでに、以下のファイルが実装済みです。
- migration
- model
- factory
- seeder

環境構築後、以下コマンドを実行して、すぐに動作確認をすることができます。

```
php artisan migrate
php artisan db:seed
```

# 解説サイト

以下ページで動作確認結果をまとめています。

- [Eloquentのリレーション活用方法【関連の定義】](https://www.wakuwakubank.com/posts/377-laravel-relation-1/)
- [Eloquentのリレーション活用方法【関連の取得】](https://www.wakuwakubank.com/posts/385-laravel-relation-2/)
- [Eloquentのリレーション活用方法【紐付けの設定と解除】](https://www.wakuwakubank.com/posts/387-laravel-relation-3/)
