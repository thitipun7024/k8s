FROM php:8.2-rc-fpm-alpine3.17 
RUN apk add bash ###Solution: Make use of apk add to install packages on Alpine.
RUN apk update && apk upgrade --no-cache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY ./web /usr/share/nginx/html/