#イメージのベースを指定
FROM php:7.4-fpm

#composerのインストール
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

#npmのインストール
COPY --from=node:10.22 /usr/local/bin /usr/local/bin
COPY --from=node:10.22 /usr/local/lib /usr/local/lib

#パッケージ管理ツールapt-getの更新と必要パッケージのインストール
RUN apt-get update \
  && apt-get install -y \
  git \
  zip \
  unzip \
  vim \
  && docker-php-ext-install pdo_mysql bcmath

# Xdebug
RUN pecl install xdebug && \
  docker-php-ext-enable xdebug && \
  echo xdebug.mode=debug"\n"xdebug.start_with_request=yes"\n"xdebug.client_host=host.docker.internal"\n"xdebug.log=/tmp/xdebug.log >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www/html

#コンテナ内に入った時のディレクトリを指定
WORKDIR /var/www/html
