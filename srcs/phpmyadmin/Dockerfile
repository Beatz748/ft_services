FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli \
 openssh php7-zlib php7-curl php7-mbstring php7-json php7-session \
 openrc nginx php-fpm openssl wget supervisor

RUN adduser -D -g 'www' www

RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx

RUN mkdir -p /usr/share/webapps/ && cd /usr/share/webapps

WORKDIR /www

RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz

RUN tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz

RUN rm phpMyAdmin-5.0.2-all-languages.tar.gz

RUN mv phpMyAdmin-5.0.2-all-languages phpmyadmin

COPY /srcs/supervisor.conf /etc/supervisord.conf

COPY /srcs/kshantel.key /etc/ssl/kshantel.key

COPY /srcs/kshantel.pem /etc/ssl/kshantel.pem

COPY /srcs/nginx.conf /etc/nginx/conf.d/default.conf

COPY /srcs/config.inc.php phpmyadmin/config.inc.php

COPY /srcs/phpmyadmin.sh .

RUN chmod 644 phpmyadmin/config.inc.php

CMD sh phpmyadmin.sh

EXPOSE 5000
