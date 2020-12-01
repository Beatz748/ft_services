FROM alpine:latest

RUN apk update && apk upgrade

RUN apk add influxdb

CMD influxd

EXPOSE 8086
