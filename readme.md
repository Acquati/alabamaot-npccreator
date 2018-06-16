# NPC Creator - Alabama Open Tibia Server

## [AlabamaOT.com]()

## Instalação

1. **Clone do projeto**
```shell
git clone --recurse-submodules https://github.com/Acquati/alabamaot-site.git
```

2. **Criando o .env do Laravel**
Áreas que precisam ser configuaradas:
```shell
APP_URL=http://localhost:8082
```
```shell
DB_CONNECTION=pgsql
DB_HOST=172.17.0.1
DB_PORT=5432
DB_DATABASE=shanti
DB_USERNAME=default
DB_PASSWORD=secret
```

3. **Criando o .env do Laradock**
Áreas que precisam ser configuaradas:
```shell
Data Path
Choose storage path on your machine. For all storage systems.
DATA_SAVE_PATH=~/.laradock/alabamaotsite
PHP_FPM
PHP_FPM_INSTALL_PGSQL=true
```
```shell
# NGINX
NGINX_HOST_HTTP_PORT=8082
NGINX_HOST_HTTPS_PORT=443
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000
```

4. **Comandos pasta Laradock**
```shell
cd laradock
docker-compose up -d nginx php-fpm postgres
docker-compose exec --user=laradock workspace composer install
docker-compose exec --user=laradock workspace php artisan key:generate
```

5. **Migrate do DB**
```shell
docker-compose exec --user=laradock workspace php artisan migrate
```
Como criar o DB Manualmente caso de erro na migrate:
```shell
docker-compose exec postgres createdb -U default alabamaotsite
docker-compose exec --user=laradock workspace php artisan migrate
```

5. **NPM**
```shell
npm install
```
Caso de erro no pngquant
```shell
sudo apt-get install libpng-dev
npm install -g pngquant-bin
```

6. **Instalação dos módulos**
```shell
npm install bootstrap
npm install popper
npm install holderjs
npm run dev
```

## Passos da criação do de um Projeto Laravel 5.6 com Laradock 7

1. **Laravel 5.6**
```shell
git clone --recurse-submodules https://github.com/laravel/laravel.git alabamaot-site
cd alabamaot-site
```

2. **Remoção do .git do laravel**
```shell
rm -rf .git
```

3. **Adicionando repositório no GitHub**
```shell
git init
git add .
git commit -m "Adicionando Laravel 5.6"
git remote add origin https://github.com/Acquati/alabamaot-site.git
ggpull
git push -u origin master
```

4. **Adicionando .gitignore**
```shell
git add .
git commit -m "Adicionando .gitignore"
ggpush
```

5. **Laradock**
```shell
git submodule add https://github.com/laradock/laradock.git
cd laradock
```
```shell
git add .
git commit -m "Adicionando o Laradock"
ggpush
```

6. **Model, Controller e Table**
```shell
docker-compose exec --user=laradock workspace php artisan make:model Npc -mcr
```

### Um pouco sobre Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects.

### Aprendendo Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.