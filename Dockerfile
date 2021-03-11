FROM php:7.1.3-fpm

EXPOSE 80

RUN apt-get update -y \
    && apt-get install -y nginx

COPY nginx-site.conf /etc/nginx/sites-enabled/default
COPY entrypoint.sh /bin/entrypoint.sh

WORKDIR /var/www/html

COPY --chown=www-data:www-data ./src .

ENTRYPOINT ["sh", "/bin/entrypoint.sh"]
