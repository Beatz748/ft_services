cd $WP_ROOT
wp user create author kshantel@school.com --role=author --user_pass=author --allow-root
wp user create author tbeedril@school.com --role=author --user_pass=author --allow-root
wp user create author msafflow@school.com --role=author --user_pass=author --allow-root
wp user create author lmeriya@school.com --role=author --user_pass=author --allow-root
wp user create author smatha@school.com --role=author --user_pass=author --allow-root
php-fpm7
nginx -g "daemon off;"
/usr/bin/supervisord -c /etc/supervisord.conf