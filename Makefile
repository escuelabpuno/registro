.PHONY: run build

run:
	docker-compose run --rm -p 8080:1337 app

build:
	docker-compose build app
