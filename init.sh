source .env

clean()
{
  docker exec "${API_CONTAINER_NAME}" rm -r /usr/local/var/www/api
}

init_api() {
  docker exec -w /usr/local/var/www/ "${API_CONTAINER_NAME}" /usr/local/etc/php/composer create-project symfony/skeleton api
}

docker-compose up -d --build

clean

init_api

