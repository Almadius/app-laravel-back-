.PHONY: up down build rebuild restart logs bash

up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose build

rebuild:
	docker-compose down
	docker-compose build
	docker-compose up -d

restart:
	docker-compose restart

logs:
	docker-compose logs -f

bash:
	docker-compose exec app bash
