# Hongdae fashion (project PM.6)

- 20~30代の人々が服に興味が多い、個性があるものを探している

人がいます。このため他の海外からファッションのトレンドを調べて、

流行があるスタイルを紹介しながら売上の向上になることを想定して

実装をしました。

---

### 開発言語・フレームワーク
- PHP v8
- Laravel v8
- Tailwind CSS
- Alpine.js

### ライブラリー
- swiper（スライドライブラリー）
- micromodal（モーダルユーティリティーライプラリー）

### 開発環境
- Laravel Breeze (認証及び提供)
- Laravel Sail（ローカル開発環境）

### 購入環境
- [Stripe](https://stripe.com/jp?utm_campaign=JP_JA_Search_Brand_Stripe_EXA-19310753508&utm_medium=cpc&utm_source=google&ad_content=643624446228&utm_term=stripe&utm_matchtype=e&utm_adposition=&utm_device=c&gad_source=1&gclid=CjwKCAjww_iwBhApEiwAuG6ccE0J_FMJbf8TRtN0ZIGNQ3ofIC7PcDluNSI1KmWlgPXs62FM72pB2hoCh4YQAvD_BwE)

## Stripe 

決済のテストとしてstripeを利用しています。 

必要な場合は .env にstripeの情報を追記してください。


## Mailtrap

### メール環境
- [mailtrap.io](https://mailtrap.io/)

メールのテストとしてmailtrapを利用しています。 

必要な場合は .env にmailtrapの情報を追記してください。

メール処理には時間がかかるので、 キューを使用しています。

必要な場合は`php artisan queue:work`で、

ワーカーを立ち上げて動作確認するようにしてください。

### 画面設計
- Figma

## ダウンロード方法

#### git clone
- git clone 
  - https://github.com/kimpm78/Hongdae_fa_project.git

#### git clone　ブランチを指定してダウンロードする場合
- git clone -b ブランチ名 
  - https://github.com/kimpm78/Hongdae_fa_project.git

---

## インストール方法

1. cd larabel_hongdae
2. composer install
3. npm install
4. npm run dev

.env exampleをコピーして .env fileを作成

.env fileの中の下記をご利用の環境を合わせて変更します。

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_hongdae
DB_USERNAME=hongdae
DB_PASSWORD=password123
```

XAMPP/MAMP または他の開発環境でDBを起動して後に

`php artisan migrate:fresh --seed`

と実行してください。（データベーステーブル＋ダミーデータが追加されればOKです。）

5. `php artisan key:generate`
    入力してキーを生成後、
    `php artisan serve`で簡易サーバーを立ち上げ、
    表示確認してください。

## インストール後の実施事項

画面のダミーデータは
public/imagesフォルダ内に
`sample.1.jpg - sample.9.jpg`
として保存しています。

`php artisan storage:link`
- storage フォルダにリンク

- `storage/app/public/products` フォルダ内に
保存すると表示されます。 
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は
`storage/app/public/shops`フォルダを作成し
画像を保存してください。




