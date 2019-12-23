# Controller-users

# Pré requisitos

-Ter o MySql instalado;

-Ter o Composer instalado;

-Ter o Php instalado;

-Ter o Vue.js;

# Passo a passo

-Crie um database no seu MySql com o comando: create database api_rest_laravel;

-Abra a pasta 'back-end' no gerenciador de documentos copie o arquivo "env-example" e cole ele com o nome ".env" e copie e cole o conteudo do arquivo 'config-env.txt';

-Abra a o arquivo '.env' e troque o "DB_USERNAME" pelo nome de usuário do seu MySql com permisões para alterar as tabelas de api_rest_laravel, e troque a senha de "DB_PASSWORD" pela senha do usuário;

-Abra a pasta 'back-end' no cmd e execute: 'composer update' e depois 'npm install' e 'php artisan migrate'; "Esse comando irá criar as tabelas no seu banco de dados"

-Ainda no cmd com a pasta 'back-end' aberta, execute: 'php artisan serve'; "Esse comando irá subir seu servidor back-end"

-Abra a pasta 'front-end' e execute os seguintes comandos: npm install e depois npm run dev; "O primeiro comando irá instalar as dependencias e o segundo irá subir o servidor"

# Como funciona

-Acesse a localhost:8080;
