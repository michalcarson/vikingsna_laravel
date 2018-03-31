FROM php:7.1-fpm

RUN DEBIAN_FRONTEND=noninteractive \
      apt-get update \
      && apt-get install --yes --no-install-recommends \
      git \
      zip \
      unzip \
      socat \
      net-tools \
      vim-tiny \
      libmagickwand-dev \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libpng12-dev \
      mysql-client \
      && pecl install imagick \
      && docker-php-ext-enable imagick \
      && docker-php-ext-install pdo_mysql \
      && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
      && docker-php-ext-install -j$(nproc) gd \
      && rm -r /var/lib/apt/lists/*

COPY conf/usr/local/etc/php-fpm-www.conf /usr/local/etc/php-fpm.conf

COPY run.sh /run.sh
COPY test.sh /test.sh
RUN chmod +x /run.sh && chmod +x /test.sh

WORKDIR /var/www/api

CMD /run.sh
