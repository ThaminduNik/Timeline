FROM wordpress:php7.1
MAINTAINER Thamindu
RUN mkdir -p /var/www/html/wp-content
COPY src /var/www/html
EXPOSE 80
EXPOSE 443


