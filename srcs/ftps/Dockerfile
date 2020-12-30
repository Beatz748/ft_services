FROM alpine:latest

RUN	apk update && apk upgrade

RUN	apk add openrc openssl vsftpd

RUN mkdir -p /var/ftp

RUN	mkdir -p /ftp_anon /kshantel

RUN printf "THIS IS CHECK FOR SOME FILES IN FTPS" > /kshantel/README.POWERED.BY.BEATZ.748.TXT

RUN printf "kshantel\nkshantel\n" | adduser kshantel -s /bin/false -h /kshantel

RUN	printf "/bin/false\n" >> /etc/shells

RUN	chown kshantel:kshantel /kshantel

COPY srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf

COPY srcs/start_vsftpd.sh .

RUN openssl req \
		-newkey rsa:2048 \
		-nodes \
		-keyout /etc/vsftpd.key \
		-x509 \
		-days 365 \
		-out /etc/vsftpd.crt \
		-subj "/C=RU/ST=Moscow/L=Moscow/O=21school/OU=21/CN=kshantel"

EXPOSE 21 21000

ENTRYPOINT [ "sh", "start_vsftpd.sh" ]
