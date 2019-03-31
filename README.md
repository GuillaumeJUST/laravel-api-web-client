# Laravel Manager Project

A simple web site made with Laravel

## Prerequisites

**Install docker and docker-compose**

https://docs.docker.com/compose/install/

**Clone this repository**

```
git clone https://github.com/guillaumejust/laravel-website-docker.git
```

## Installation

Go to the project directory.

Exec this command to start the containers.

```
docker-compose up -d
```

Exec this command after container start-up to init project

```
docker-compose exec app composer init-project
```

Exec this last command to init data

```
docker-compose exec app composer init-data
```

Change Database connexion into .env and .env-testing

**.env**
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=server_manager
DB_USERNAME=root
DB_PASSWORD=123456
```

**.env-testing**
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=server_manager_testing
DB_USERNAME=root
DB_PASSWORD=123456
```

If you want to use "forget password" please configure 

**.env**
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

## Site 

Url : http://127.0.0.1/home

User: ```admin@test.com```

Password: ```123456```

## Database Docker

Connect your DB with your favorite client

```
HOST: 127.0.0.1
PORT: 3306
DB: server_manager
USER: root
Password: 123456
```

If you want to go inside database docker

```
docker-compose exec db bash
```

## Testing 

Before running unit test you must create a database ```server_manager_testing```

To running Unit test
```
docker-compose exec app composer test
```

## API 

I used postman to call my web service https://www.getpostman.com

You can import my collections and my environment, go to folder postman

Swagger documentation : http://127.0.0.1/api/documentation
