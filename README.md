<h1> CRUD em PHP com padrão MVC </h1>
Esse projeto é um CRUD (Create, Read, Update, Delete) desenvolvido em PHP seguindo o padrão arquitetural MVC (Model-View-Controller). O objetivo é demonstrar como é possível organizar um projeto em camadas, isolando as responsabilidades de cada uma delas e tornando o código mais limpo, legível e fácil de manter.

<h3>Tecnologias utilizadas</h3>

* PHP
* MySQL
* HTML
* CSS
Bootstrap
<h3>Funcionalidades </h3>
O CRUD permite que o usuário realize as seguintes operações:
<br>

* Criar um novo registro.<br>
* Ler um ou mais registros existentes.<br>
* Atualizar um registro existente.<br>
* Excluir um registro existente.<br>

<h3>Como utilizar </h3>
Para utilizar o projeto, siga os passos abaixo:

Clone o repositório para sua máquina local;
Crie um banco de dados MySQL e importe o arquivo database.sql que está na raiz do projeto para criar a tabela necessária;
Configure o arquivo config.php com as credenciais do seu banco de dados;
Abra o arquivo index.php no seu navegador e teste as funcionalidades.
Estrutura do projeto
A seguir, uma breve descrição das pastas e arquivos do projeto:

conexao.php: arquivo de configuração que define as credenciais do banco de dados;
controllers/: pasta que contém os arquivos responsáveis por controlar a lógica de negócio da aplicação;
models/: pasta que contém os arquivos responsáveis por abstrair o acesso ao banco de dados;
views/: pasta que contém os arquivos responsáveis por exibir as informações ao usuário;
index.php: arquivo principal que define as rotas da aplicação.
Considerações finais
Esse projeto foi desenvolvido com o intuito de demonstrar como é possível organizar um projeto em camadas seguindo o padrão arquitetural MVC. No entanto, existem muitas outras formas de organizar um projeto, e a escolha da melhor abordagem depende do contexto e das necessidades específicas de cada projeto.
