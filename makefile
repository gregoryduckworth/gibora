APP_IMAGE_NAME = app
DB_IMAGE_NAME = db

docker-build:
	docker-compose up -d --build

force-refresh: clear refresh

refresh: migrate seed

clear:
	docker-compose exec $(APP_IMAGE_NAME) php artisan config:clear

migrate:
	docker-compose exec $(APP_IMAGE_NAME) php artisan migrate:refresh

seed:
	docker-compose exec $(APP_IMAGE_NAME) php artisan db:seed
