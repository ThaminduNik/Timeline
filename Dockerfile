FROM wordpress:php7.1

COPY internal /var/www/html
EXPOSE 80
EXPOSE 443


