# Laravel Framework

### Initial setting

#### 1. Laradock: Clone the laradock repository

``` bash
$ git clone https://github.com/Laradock/laradock.git
```

#### 2. .env: Enter the laradock folder and rename env-example to .env.

``` bash
$ cp env-example .env
```

#### 3. Container: Upload your containers

``` bash
$ docker-compose up -d nginx mysql phpmyadmin
```

## Installing Laravel and configuring the environment with Docker

#### 1. Container: Access the workspace container

``` bash
$ docker-compose exec workspace bash
```

#### 2. Folder: Create a folder to allocate projects

``` bash
$ mkdir folder_name
```

#### 3. Laravel: Install Laravel according to the documentation

``` bash
$ composer create-project --pre-dist laravel / laravel folder_name
```

#### 4. Domain: Point domain in the browser to open application

- follow the path -> laradock / nginx / sites / laravel.conf.example, duplicate and rename with the same name of the desired domain to facilitate the location of the file.
  Inside the file make the following changes:

> Define your domain name:
> Find the server_name laravel.test line;
> Change to:
> server_name domain_name.test;

> Define your application path:
> Find the line root / var / www / laravel / public;
> Change to:
> root / var / www / folder_name / folder_name / public;

#### 5. Container: Restart the containers to read the file you just modified

``` bash
$ docker-compose restart
```

#### 6. Domain: Set the domain pointed to in the browser to direct to the host itself
- Windows: follow the path -> C:> Windows> System32> drivers> etc> hosts
  Linux: follow the path -> etc> hosts
  Mac: follow the path -> etc> hosts
  Inside the file, make the following changes:

> At the end of the file, set your machine's ip:
> 127.0.0.1 domain_name.test

#### 6. DB: Create a database
> DB Name: db_name

> Set the charset to the same as Laravel:
> utf8mb4_unicode_ci

- Follow the path folder_name / .env
  Inside the file, find the connection data to the database and make the following changes:

> DB_CONNECTION = mysql
> DB_HOST = mysql
> DB_PORT = 3306
> DB_DATABASE = db_name
> DB_USERNAME = your_username
> DB_PASSWORD = your_password

> Find the line APP_URL = http: // localhost
> Change to:
> APP_URL = http // domain_name.test

- Follow the path folder_name / config / app.php
  Inside the file, find the timezone and change it according to your location:

 > Find the line 'timezone' => 'UTC'
 > Change to:
 > 'timezone' => 'America / Sao_Paulo'

- Edson Junior de Andrade Narvaes.
