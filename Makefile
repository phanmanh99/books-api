init:
	cp .env.example .env
	docker/bin/sail up -d --build
	docker-compose exec laravel.test composer install
	docker-compose exec laravel.test php artisan key:generate
	docker-compose exec laravel.test php artisan migrate
