# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pmelinda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/10/28 14:48:32 by pmelinda          #+#    #+#              #
#    Updated: 2020/10/28 14:48:41 by pmelinda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine

RUN apk update && apk upgrade && apk add mysql mysql-client openrc
VOLUME [ "/var/lib/mysql" ]

COPY ./src/mysql_conf.sql /etc/
COPY ./src/my.cnf /etc/
COPY ./src/wordpress.sql /etc/
COPY ./src/start.sh .

RUN chmod u+x start.sh

EXPOSE 3306
ENTRYPOINT [ "sh", "start.sh" ]
