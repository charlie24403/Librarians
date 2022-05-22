FROM php:7.4.29-apache

# install locales
RUN apt clean \
    && apt update \
    && apt install -y locales locales-all \
    # compile local file
    && locale-gen ja_JP.UTF-8

# set lang=Ja.utf-8
ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:en
ENV LC_ALL ja_JP.UTF-8

# change TZ to Ja
RUN ln -sf /usr/share/zoneinfo/Japan /etc/localtime

# copy apache config file
COPY ./build/app/php-apache/apache/default.conf /etc/apache2/sites-enabled/000-default.conf

# install laravel dependent packages
RUN apt update && \
	apt install -y git unzip libzip-dev libicu-dev libonig-dev && \
	docker-php-ext-install intl pdo_mysql zip bcmath

# install comporser
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/laravel
