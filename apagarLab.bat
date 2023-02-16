docker stop desafio-docker-microservicos-db-1
docker stop desafio-docker-microservicos-php-1
docker stop desafio-docker-microservicos-proxy-1

docker rm desafio-docker-microservicos-db-1
docker rm desafio-docker-microservicos-php-1
docker rm desafio-docker-microservicos-proxy-1

docker rmi desafio-docker-microservicos-db
docker rmi desafio-docker-microservicos-php
docker rmi desafio-docker-microservicos-proxy