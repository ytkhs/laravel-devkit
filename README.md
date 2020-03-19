## command sample

```
# start
docker-compose build
docker-compose up -d

# laravel: http://localhost:8080

# composer
docker-compose exec c_php composer install

# artisan
docker-compose exec c_php php /var/www/html/artisan migrate

# shell
docker-compose exec php ash

# PHPMyAdmin http://localhost:8081
# MailHog  http://localhost:8025

# node
docker-compose exec c_node npm install
docker-compose exec c_node npm run dev

# MySQL
docker-compose exec c_mysql bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
mysql -h 127.0.0.1 -uhomestead -p homestead -h 127.0.0.1 # From Host

# redis
docker-compose exec c_redis redis-cli


```
