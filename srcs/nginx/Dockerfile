FROM alpine:latest

RUN apk upgrade && apk update

RUN apk add supervisor openssl openrc openssh openrc nginx

RUN mkdir /run/nginx/

COPY kshantel.key /etc/ssl/kshantel.key

COPY kshantel.pem /etc/ssl/kshantel.pem

RUN adduser -D -g 'www' www

RUN mkdir /www

RUN chown -R www:www /var/lib/nginx

RUN chown -R www:www /www

COPY nginx.conf etc/nginx/nginx.conf

COPY index.html /www/index.html

COPY supervisor.conf /etc/supervisord.conf

COPY nginx.sh .

CMD sh nginx.sh

EXPOSE 80 443
