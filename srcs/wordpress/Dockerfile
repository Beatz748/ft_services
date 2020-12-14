FROM alpine:latest

RUN apk update
RUN apk upgrade
RUN apk add wget
RUN apk add php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session
RUN apk add nginx openrc supervisor axel bash
RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx

COPY nginx.conf /etc/nginx/conf.d/default.conf


WORKDIR /www
RUN axel https://wordpress.org/latest.tar.gz -o latest.tar.gz
RUN tar -xvf latest.tar.gz
RUN rm latest.tar.gz
RUN chown -R www:www /www

WORKDIR /usr/local/bin
RUN axel https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -o wp && \
    chmod +x wp

WORKDIR /

COPY supervisor.conf /etc/supervisord.conf
COPY wp-config.php /www/wordpress/
COPY start_wp.sh .

EXPOSE 5050

ENTRYPOINT ["sh", "start_wp.sh"]