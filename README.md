
# laravel Client HTTP

## Datos de laravel
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Acerca de este proyecto

En el siguiente repositorio se podrá encontrar los archivos php con el framework de laravel.


## Se debe de tener instalado php,

## Crear un archivo con extension ".env"
## Pegar los siguiente, en el archivo creado:

```php

APP_NAME=httpclientsinauth
APP_ENV=local
APP_KEY=base64:nm7oQ8MAvOY4WxA8xcTAv58wGN3FdfrNmGjtxzOprcE=
APP_DEBUG=true
APP_URL=http://httpclientsinauth.test


#API_URL=http://lara10-api-labclinicosinauth.test:9000/api/ #<=Se conectara este proyecto si esta #des-comentado
API_URL=http://127.0.0.1:8000/api/ #<=Esta ruta es a donde se conectara este proyecto

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

#   DB_CONNECTION=sqllite
#   DB_HOST=127.0.0.1
#   DB_PORT=3306
#   DB_DATABASE=laravel
#   DB_USERNAME=root
#   DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```
## Por ultimo Correr el siguiente comando (se debe de tener como variable global en windows "php"):
## se debe de correr el comando en la misma ubicación que la raíz del todo el proyecto.

```php

#pone en ejecución la aplicación se debe de agregar en el archivo "C:\Windows\System32\drivers\etc".
php artisan serve --host=lara10-httpclientsinauth.test --port=9020

#saldrá un mensaje similar al siguiente o el nombre de donde se inicio el server:
 INFO  Server running on [http://127.0.0.1:8000].


```
=======
### Extras del framework utilizado.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======


## Autor

| [<img src="https://avatars.githubusercontent.com/u/8519258?v=4" width=115><br><sub>Jorge Ramos</sub>](https://github.com/sonic-alex2) |
| :---: |
