#!/bin/sh

mysql_install_db --user=mysql --ldata=/var/lib/mysql
/usr/bin/mysqld --console --init_file=/etc/mysql/config.sql
echo "CREATE DATABASE wordpress;" | mysql
echo "GRANT ALL ON wordpress.* TO 'mysql'@'%' WITH GRANT OPTION;" | mysql
echo "FLUSH PRIVILEGES;" | mysql
mysql -u mysql wordpress < etc/mysql/wordpress.sql
