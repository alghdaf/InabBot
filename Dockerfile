FROM php:7.4-fpm

COPY . /app

WORKDIR /app

CMD ["php", "main.php"]
