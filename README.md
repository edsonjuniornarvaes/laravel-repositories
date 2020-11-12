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

- siga o caminho -> laradock/nginx/sites/laravel.conf.example, duplique e renomeie com o mesmo nome do domínio desejado para facilitar a localização do arquivo.
  Dentro do arquivo faça as seguintes alterações:

>Defina o nome do seu domínio:
>Encontre a linha server_name laravel.test;
>Altere para:
>server_name domain_name.test;

>Defina o caminho de sua aplicação:
>Encontre a linha root /var/www/laravel/public;
>Altere para:
>root /var/www/folder_name/folder_name/public;

#### 5. Container: Reinicie os containers para realizar a leitura do arquivo que acabou de modificar

```bash
$ docker-compose restart
```

#### 6. Domínio: Definir que o domínio apontado no navegador direcione para o próprio host
- Windows: siga o caminho -> C:> Windows > System32 > drivers > etc > hosts
  Linux: siga o caminho -> etc > hosts 
  Mac: siga o caminho -> etc > hosts 
  Dentro do arquivo faça as seguitnes alterações:

>No final do arquivo defina o ip de sua máquina:
>127.0.0.1 domain_name.test 

#### 6. DB: Crie um banco de dados
>DB Name: db_name

- Defina o charset como o mesmo do Laravel:
  utf8mb4_unicode_ci

- Siga o caminho folder_name/.env
  Dentro do arquivo, encontre os dados de conexão com o banco de dados e faça as seguintes alterações:

>  DB_CONNECTION=mysql
>  DB_HOST=mysql
>  DB_PORT=3306
>  DB_DATABASE=db_name
>  DB_USERNAME=your_username
>  DB_PASSWORD=your_password

  Encontre a linha APP_URL=http://localhost
  Altere para:
  APP_URL=http//domain_name.test

- Siga o caminho folder_name/config/app.php
  Dentro do arquivo, encontre o timezone e altere conforme sua localidade:

 > Encontre a linha 'timezone' => 'UTC'
 > Altere para:
 > 'timezone' => 'America/Sao_Paulo'

- Edson Junior de Andrade Narvaes.
