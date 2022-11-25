# Mousíká
O Site Mousíká é criado com o intuito de permitir que todos possam desfrutar de partituras gratuitas, sem a necessidade de precisar ficar pagando uma assinatura especifica para conseguir visualizar a musica que você tanto gosta.

# Como rodar o projeto
Para começar a usar o projeto Mousíká é necessario seguir os passos abaixo e cumprir alguns requisitos.

Requisitos:
```
Servidor web de sua preferencia (com suporte a PHP);
MySQL.
```

##### Iniciando
Para realizar as suas modificações ou usar esse projeto, é preciso saber por onde começar.

###### Clonando o projeto
`git clone https://github.com/JoaoAlem/Mousika.git`

###### Executando o banco de dados
Dentro do repositório clonado, teremos uma pasta com o nome `SQL`, dentro dessa pasta possui o modelo físico do banco de dados, é simplesmente abrir o `Modelo Fisico.sql`, copiar, colar e executar o SQL dentro do seu banco de dados MySQL.

###### Configurações dentro do arquivo
Procure o arquivo `inc/database.php` e na linha 9, altere as constantes `DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD` para as credenciais do seu banco de dados.

###### Functions.php
Procure o arquivo `assets/php/functions.php` e defina a constante DBAPI para o caminho até o `inc/database.php` da seguinte maneira:
```
if(!defined('DBAPI')){
    define('DBAPI', '../../inc/database.php');
}
```

# Observações
*Esse é um projeto criado para estudos.*