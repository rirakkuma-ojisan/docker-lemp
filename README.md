# docker を使った laravel 環境構築

めちゃくちゃわかりやすい。。。

https://qiita.com/shimotaroo/items/29f7878b01ee4b99b951
https://qiita.com/shimotaroo/items/679104b7e00dd9f89907

# laravel に vue を適用させていく方法

https://qiita.com/minato-naka/items/2d2def4d66ec88dc3ca2

composer require laravel/ui で以下のようなエラー
Installation failed, reverting ./composer.json to its original content.
解決？→https://qiita.com/anoonoll/items/5fab1e6682861a406570
composer require laravel/ui:1.\*

# npm run dev でエラー

```
ERROR in ./resources/sass/app.scss
Module build failed (from ./node_modules/css-loader/index.js):
ModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):
ValidationError: Invalid options object. Sass Loader has been initialized using an options object that does not match the API schema.
```

sass-loader が新しすぎる？
ver.8.0.0 を記事の通り ver.7.1.0 にしたらいけた。

https://qiita.com/kuroro_ru/items/d50212a1919308cc1480

# vuetify を導入

色々記事があったけどうまく行ったのはこれ
https://trialanderror.jp/laravel-6-x-vuetify/
