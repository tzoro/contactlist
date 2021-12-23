# Symfony 6, Nginx, PHP 7 bitnami/php-fpm:7.4-prod-debian-10 docker container

## Steps
Build images
`docker-compose up -d`

Should work, if not please:

Bash into fpm image
`docker exec -it symfony-phpfpm sh`

Execute setup script
`cd / && sh install-symfony.sh`