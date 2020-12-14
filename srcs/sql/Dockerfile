FROM alpine:latest

EXPOSE 3306

RUN adduser -D -g 'mysql' mysql

RUN apk add --no-cache mysql mysql-client

COPY my_db.sql /etc/mysql/config.sql

COPY my.cnf /etc/mysql/my.cnf

COPY start_mysql.sh /usr/local/bin/start_mysql.sh

ENTRYPOINT ["start_mysql.sh"]