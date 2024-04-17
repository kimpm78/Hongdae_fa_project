# Hongdae fashion
- project no.6

## インストール方法

1. cd larabel_hongdae
2. composer install
3. npm install
4. npm run dev

.env exampleをコピーして .env fileを作成

.env fileの中の下記をご利用の環境を合わせて変更します。

`
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_hongdae
DB_USERNAME=hongdae
DB_PASSWORD=password123
`
XAMPP/MAMP または他の開発環境でDBを起動して後に

`php artisan migrate:fresh --seed`

と実行してください。（データベーステーブル＋ダミーデータが追加されればOKです。）

5. `php artisan key:generate`
    入力してキーを生成後、
    `php artisan serve`で簡易サーバーを立ち上げ、
    表示確認してください。


## ダウンロード方法

### git clone
- git clone 
  - https://github.com/kimpm78/Hongdae_fa_project.git

### git clone　ブランチを指定してダウンロードする場合
- git clone -b ブランチ名 
  - https://github.com/kimpm78/Hongdae_fa_project.git


## インストール後の実施事項

画面のダミーデータは
public/imagesフォルダ内に
`sample.1.jpg - sample.6.jpg`
として保存しています。

### php artisan storage:link 
- storage フォルダにリンク

- `storage/app/public/products` フォルダ内に
保存すると表示されます。 
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は
`storage/app/public/shops`フォルダを作成し
画像を保存してください。

