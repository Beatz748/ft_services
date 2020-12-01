# export MINIKUBE_HOME=~/goinfre

minikube start --vm-driver=virtualbox --cpus=2 --disk-size="11000mb" --memory="3000mb"

eval $(minikube docker-env)

minikube addons enable metallb;
minikube addons enable metrics-server;
minikube addons enable dashboard;

kubectl apply -f srcs/yaml/metallb-config.yaml

docker build -t nginx srcs/nginx/
docker build -t php srcs/phpmyadmin/
docker build -t mariadb srcs/sql/
docker build -t wordpress srcs/wordpress/
docker build -t influxdb srcs/influxdb/
docker build -t telegraf srcs/telegraf/
docker build -t grafana srcs/grafana/
docker build -t ftps srcs/ftps/

kubectl apply -f srcs/yaml/mariadb.yaml
kubectl apply -f srcs/yaml/nginx.yaml
kubectl apply -f srcs/yaml/php.yaml
kubectl apply -f srcs/yaml/wordpress.yaml
kubectl apply -f srcs/yaml/influxdb.yaml
kubectl apply -f srcs/yaml/telegraf.yaml
kubectl apply -f srcs/yaml/grafana.yaml
kubectl apply -f srcs/yaml/ftps.yaml

minikube dashboard

