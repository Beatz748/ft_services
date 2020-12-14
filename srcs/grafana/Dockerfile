FROM alpine:latest

RUN wget https://dl.grafana.com/oss/release/grafana-7.2.1.linux-amd64.tar.gz
RUN tar xzvf grafana-7.2.1.linux-amd64.tar.gz
RUN        mv grafana-7.2.1 grafana
RUN	rm grafana-7.2.1.linux-amd64.tar.gz

RUN apk add --no-cache libc6-compat
COPY srcs/influxdb-datasource.yaml /grafana/conf/provisioning/datasources/influxdb.yaml
COPY srcs/dashboards.yaml /grafana/conf/provisioning/dashboards/dashboards.yaml
COPY srcs/jsons/* /var/lib/grafana/dashboards/
EXPOSE 3000
CMD cd /grafana/bin ; \
        ./grafana-server
