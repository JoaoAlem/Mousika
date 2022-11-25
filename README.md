# Mousíká
O Site Mousíká é criado com o intuito de permitir que todos possam desfrutar de partituras gratuitas, sem a necessidade de precisar ficar pagando uma assinatura especifica para conseguir visualizar a musica que você tanto gosta.

# Como rodar o projeto
Para começar a usar o projeto Mousíká é necessario seguir os passos abaixo e cumprir alguns requisitos.

Requisitos:
```
Servidor web de sua preferencia (com suporte a PHP e Uploads);
MySQL.
```

##### Iniciando
Para realizar as suas modificações ou usar esse projeto, é preciso saber por onde começar.

###### Clonando o projeto
`git clone https://github.com/JoaoAlem/Mousika.git`

###### Executando o banco de dados
Dentro do repositório clonado, teremos uma pasta com o nome `SQL`, dentro dessa pasta possui o modelo físico do banco de dados, é simplesmente abrir o `Modelo Fisico.sql`, copiar, colar e executar o SQL dentro do seu banco de dados MySQL.

###### Configurações dentro do arquivo
Procure o arquivo `config.php` e troque as constantes de conexão do banco de dados pelas suas credenciais.

###### Configurações no servidor Web
O servidor web precisa permitir uploads, e é necessario que os arquivos se encontrem na primeira pasta do servidor, Ex:
`/var/html/www/`
Ou seja, eles não podem estar em uma subpasta.

# Observações
*Esse é um projeto criado para estudos.*