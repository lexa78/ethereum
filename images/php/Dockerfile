FROM php:7.4-fpm

MAINTAINER A.Kalaydov <akalajdov@mail.ru>

RUN apt-get update && apt-get install -y \
#apt-get install software-properties-common \
	#add-apt-repository -y ppa:ethereum/ethereum \
	#apt-get update && apt-get install -y \
#		ethereum \
        #bcmath \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
	libpng-dev \
	libonig-dev \
	libzip-dev \
	libmcrypt-dev \
        && pecl install mcrypt-1.0.3 \
	&& docker-php-ext-enable mcrypt \
        && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install bcmath

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www

CMD ["php-fpm"]
#CMD exec docker run -it ethereum/client-go:v1.10.13 geth init --datadir data genesis.json