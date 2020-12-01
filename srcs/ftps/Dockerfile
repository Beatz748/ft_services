# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pmelinda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/10/28 13:44:56 by pmelinda          #+#    #+#              #
#    Updated: 2020/10/28 13:54:30 by pmelinda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine

RUN	apk update
RUN	apk add openssl vsftpd
RUN mkdir -p /var/ftp

COPY ./vsftpd.conf /etc/vsftpd/vsftpd.conf
RUN	mkdir -p /ftp_anon /pmelinda
RUN	printf "move files from the window on the left here\n" > /pmelinda/Readme.txt
RUN	printf "root\nroot\n" | adduser pmelinda -s /bin/false -h /pmelinda
RUN	printf "/bin/false\n" >> /etc/shells
RUN	chown pmelinda:pmelinda /pmelinda
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RF/ST=MSK/L=SCH/O=21/CN=pmelinda' -keyout /etc/vsftpd/ftps.key -out /etc/vsftpd/ftps.crt

EXPOSE	20 21 21000

ENTRYPOINT [ "vsftpd", "/etc/vsftpd/vsftpd.conf" ]
