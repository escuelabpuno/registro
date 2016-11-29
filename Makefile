.PHONY: run build

run:
	docker-compose run --rm -p 8080:3000 app

build:
	docker-compose build app
