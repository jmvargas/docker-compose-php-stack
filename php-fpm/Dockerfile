FROM php:7-fpm-alpine

# Install modules
RUN apk add --no-cache postgresql-dev libmcrypt-dev icu-dev \
	&& docker-php-ext-install pdo pdo_pgsql iconv mcrypt intl opcache mbstring 

RUN apk del libmcrypt-dev icu-dev

CMD ["php-fpm"]