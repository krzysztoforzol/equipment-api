.PHONY: install
install: ## create docker network and build containers
		cp -n .env.dist .env
		docker network create equipment --subnet=172.30.0.0/16 --gateway=172.30.0.1
		docker-compose build --pull --no-cache

.PHONY: up
up: ## start docker container
		docker-compose up -d

.PHONY: stop
stop: ## stop all containers
		docker-compose stop