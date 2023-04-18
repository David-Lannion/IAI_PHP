FROM php:8.1-apache
RUN apt-get update && apt-get upgrade -y && apt install libpq-dev git zip unzip -y
RUN docker-php-ext-install pdo_mysql mysqli pgsql pdo_pgsql && docker-php-ext-enable pdo_mysql mysqli pgsql pdo_pgsql && a2enmod rewrite && \
    apachectl restart
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"
# RUN    composer create-project slim/slim-skeleton IAI_PHP_PROJECT
EXPOSE 81