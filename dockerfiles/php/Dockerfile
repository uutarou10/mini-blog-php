FROM php:7.2.3-apache

RUN apt update &&\
    docker-php-ext-install pdo_mysql &&\
    echo 'date.timezone = Asia/Tokyo' >> /usr/local/etc/php/conf.d/99_myconf.ini &&\
    sed s/None/All/g /etc/apache2/apache2.conf &&\
    a2enmod rewrite

CMD ["apache2-foreground"]