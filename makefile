APP_IMAGE_NAME = app
DB_IMAGE_NAME = db

docker-build:
	docker-compose up -d --build

clear:
	docker-compose exec $(APP_IMAGE_NAME) php artisan config:clear

migrate:
	docker-compose exec $(APP_IMAGE_NAME) php artisan migrate:refresh

seed: migrate
	docker-compose exec $(APP_IMAGE_NAME) php artisan db:seed

test: seed
	docker-compose exec $(APP_IMAGE_NAME) php artisan dusk
