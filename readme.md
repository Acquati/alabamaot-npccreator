# NPC Creator - Alabama Open Tibia Server

## Instalação

## Clone do projeto

git clone --recurse-submodules https://github.com/Acquati/alabamaot-site.git

## Criando o .env do Laravel
### Áreas que precisam ser configuaradas:

APP_URL=http://localhost:8082

DB_CONNECTION=pgsql
DB_HOST=172.17.0.1
DB_PORT=5432
DB_DATABASE=shanti
DB_USERNAME=default
DB_PASSWORD=secret

## Criando o .env do Laradock
### Áreas que precisam ser configuaradas:

Data Path
Choose storage path on your machine. For all storage systems.
DATA_SAVE_PATH=~/.laradock/alabamaotsite
PHP_FPM
PHP_FPM_INSTALL_PGSQL=true

NGINX
NGINX_HOST_HTTP_PORT=8082
NGINX_HOST_HTTPS_PORT=443
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000

## Comandos pasta Laradock
cd laradock
docker-compose up -d nginx php-fpm postgres
docker-compose exec --user=laradock workspace composer install
docker-compose exec --user=laradock workspace php artisan key:generate

## NPM
npm install

### Caso de erro no pngquant
sudo apt-get install libpng-dev
npm install -g pngquant-bin

npm install bootstrap
npm install popper
npm install holderjs
npm run dev

### Como criar o DB Manualmente caso de erro na migrate:
docker-compose exec postgres createdb -U default alabamaotsite

## Migrate do DB
docker-compose exec --user=laradock workspace php artisan migrate

# Passos da criação do de um Projeto Laravel 5.6 com Laradock 7

## Laravel 5.6
git clone --recurse-submodules https://github.com/laravel/laravel.git alabamaot-site
cd alabamaot-site

## Remoção do .git do laravel
rm -rf .git

## Adicionando repositório no GitHub
git init
git add .
git commit -m "Adicionando Laravel 5.6"
git remote add origin https://github.com/Acquati/alabamaot-site.git
ggpull
git push -u origin master

## Adicionando .gitignore
git add .
git commit -m "Adicionando .gitignore"
ggpush

## Laradock 7
git submodule add https://github.com/laradock/laradock.git
cd laradock

git add .
git commit -m "Adicionando o Laradock"
ggpush

## Model, Controller e Table
docker-compose exec --user=laradock workspace php artisan make:model Npc -mcr

## Um pouco sobre Laravel

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.
