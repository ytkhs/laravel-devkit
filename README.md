## command sample

docker-compose up -d

docker-compose exec php php /var/www/html/composer update
docker-compose exec php php /var/www/html/artisan migrate

docker-compose exec php ash