# clone
- exec cmd
```
git clone <github url>
docker-compose up -d
docker exec -it laravel /bin/bash
cd /var/www/laravel
composer install
```
- edit .env
```
DB_CONNECTION=${LARAVEL_DB_CONNECTION}
DB_HOST=${LARAVEL_DB_HOST}
DB_PORT=${LARAVEL_DB_PORT}
DB_DATABASE=${LARAVEL_DB_DATABASE}
DB_USERNAME=${LARAVEL_DB_USERNAME}
DB_PASSWORD=${LARAVEL_DB_PASSWORD}
```
