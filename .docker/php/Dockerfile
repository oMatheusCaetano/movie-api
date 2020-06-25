FROM php:7.4.6-apache

RUN apt-get update && apt-get install -y --no-install-recommends
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Clear package lists
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
# Permissions
RUN chown -R root:www-data /var/www/html
RUN chmod u+rwx,g+rx,o+rx /var/www/html
RUN find /var/www/html -type d -exec chmod u+rwx,g+rx,o+rx {} +
RUN find /var/www/html -type f -exec chmod u+rw,g+rw,o+r {} +

WORKDIR /var/www/html

EXPOSE 80
