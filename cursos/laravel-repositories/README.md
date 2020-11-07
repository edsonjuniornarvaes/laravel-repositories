# Laravel Framework

## Configuração inicial

#### 1. Laradock: Clone o repositório do laradock
```bash
$ git clone https://github.com/Laradock/laradock.git
```

#### 2. .env: Entre na pasta laradock e renomeie env-example para .env.
```bash
$ cp env-example .env
```

#### 3. Container: Suba seus containers
```bash
$ docker-compose up -d nginx mysql phpmyadmin
```

## Instalando o Laravel e configurando o ambiente com Docker

#### 1. Container: Acesse o container workspace
```bash
$ docker-compose exec workspace bash
```

#### 2. Folder: Crie uma pasta para alocar os projetos
```bash
$ mkdir folder_name
```

#### 3. Laravel: Instalar Laravel segundo a documentação
```bash
$ composer create-project --prefer-dist laravel/laravel folder_name
```

#### 4. Domínio: Apontar domínio no navegador para abrir aplicação
siga o caminho -> laradock/nginx/sites/laravel.conf.example, duplique e renomeie com o mesmo nome do domínio desejado para facilitar a localização do arquivo.
Dentro do arquivo faça as seguintes alterações:

- Defina o nome do seu domínio:
  Encontre a linha server_name laravel.test;
  Altere para:
  server_name domain_name.test;

- Defina o caminho de sua aplicação:
  Encontre a linha root /var/www/laravel/public;
  Altere para:
  root /var/www/folder_name/folder_name/public;

#### 5. Container: Reinicie os containers para realizar a leitura do arquivo que acabou de modificar
```bash
$ docker-compose restart
```

#### 6. Domínio: Definir que o domínio apontado no navegador direcione para o próprio host
Windows: siga o caminho -> C:> Windows > System32 > drivers > etc > hosts
Linux: siga o caminho -> etc > hosts 
Mac: siga o caminho -> etc > hosts 
Dentro do arquivo faça as seguitnes alterações:

- No final do arquivo defina o ip de sua máquina:
  127.0.0.1 domain_name.test 

#### 6. DB: Crie um banco de dados
DB Name: db_name
- Defina o charset como o mesmo do Laravel:
  utf8mb4_unicode_ci

- Siga o caminho folder_name/.env
  Dentro do arquivo, encontre os dados de conexão com o banco de dados e faça as seguintes alterações:

  DB_CONNECTION=mysql
  DB_HOST=mysql
  DB_PORT=3306
  DB_DATABASE=db_name
  DB_USERNAME=your_username
  DB_PASSWORD=your_password

  Encontre a linha APP_URL=http://localhost
  Altere para:
  APP_URL=http//domain_name.test

- Siga o caminho folder_name/config/app.php
  Dentro do arquivo, encontre o timezone e altere conforme sua localidade:

  Encontre a linha 'timezone' => 'UTC'
  Altere para:
  'timezone' => 'America/Sao_Paulo'

- Edson Junior de Andrade Narvaes.

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center"><img src="https://laradock.io/images/laradock-full-logo.jpg" width="400"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
