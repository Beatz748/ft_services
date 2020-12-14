export MINIKUBE_HOME=~/goinfre

minikube start --vm-driver=virtualbox --cpus=2 --disk-size="11000mb" --memory="3000mb"

eval $(minikube docker-env)

minikube addons enable metallb;
minikube addons enable metrics-server;
minikube addons enable dashboard;

kubectl apply -f srcs/yaml/metallb-config.yaml

docker build -t grafana srcs/grafana/
docker build -t nginx srcs/nginx/
docker build -t php srcs/phpmyadmin/
docker build -t mysql srcs/sql/
docker build -t wordpress srcs/wordpress/
docker build -t influxdb srcs/influxdb/
docker build -t telegraf srcs/telegraf/
docker build -t ftps srcs/ftps/
kubectl apply -f ./srcs/yaml

minikube dashboard

