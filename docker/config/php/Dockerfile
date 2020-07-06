FROM php:7.3-fpm

RUN apt-get update || apt-get update && apt-get install -y \
    nmap libssl-dev librabbitmq-dev libssh-dev libxml2-dev zlib1g-dev libicu-dev libpq-dev libpng-dev libjpeg-dev libzip-dev curl git \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install opcache \
    && docker-php-ext-enable opcache \
    && docker-php-ext-install ftp \
    && docker-php-ext-install  bcmath sockets

RUN pecl install amqp \
    && docker-php-ext-enable amqp

RUN docker-php-ext-configure gd --with-gd --with-png-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) gd

RUN printf "\
    date.timezone=\"UTC\"\n\
    request_order=GP\n\
    upload_max_filesize = 10M\n\
    post_max_size = 10M\n\
    expose_php=Off\n\
    enable_dl=Off\n\
    short_open_tag=Off\n\
    pm=dynamic\n\
    pm.max_children=40\n\
    pm.start_servers=15\n\
    pm.min_spare_servers=15\n\
    pm.max_spare_servers=25\n\
    " > /usr/local/etc/php/php.ini

RUN yes | pecl install xdebug-beta

RUN  echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.profiler_output_dir=/tmp/xdebug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.profiler_enable_trigger=1" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN docker-php-ext-enable xdebug

RUN echo "date.timezone = \"Europe/Warsaw\"" > /usr/local/etc/php/conf.d/datetime.ini

RUN usermod -u 1000 www-data

#COMPOSER
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer


