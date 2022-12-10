FROM php:8.2-apache-bullseye

#copy apacche config
COPY ./apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled/000-default.conf

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update -y

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN a2enmod rewrite

RUN mkdir -p /var/www/html/
WORKDIR /var/www/html/

COPY . .

RUN cp .env.example .env

RUN composer install

RUN chmod -R 777 storage/

RUN ls -lha

EXPOSE 80

CMD ["apache2-foreground"]