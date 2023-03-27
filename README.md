<h1> CRUD em PHP com padrão MVC </h1>
Esse projeto é um <b>CRUD</b> (Create, Read, Update, Delete) desenvolvido em PHP seguindo o padrão arquitetural <b>MVC</b> (Model-View-Controller). O objetivo é demonstrar como é possível organizar um projeto em camadas, isolando as responsabilidades de cada uma delas e tornando o código mais limpo, legível e fácil de manter.
<br>

![image](https://user-images.githubusercontent.com/123131698/228085629-9243df99-b127-4305-be8c-319b8e0e067c.png)

<h3>Tecnologias utilizadas</h3>

* PHP
* MySQL
* HTML
* CSS
* Bootstrap
<h3>Funcionalidades </h3>

O CRUD permite que o usuário realize as seguintes operações:
<br>

* Criar um novo registro.<br>
* Ler um ou mais registros existentes.<br>
* Atualizar um registro existente.<br>
* Excluir um registro existente.<br>

<h3>Como utilizar </h3>

Para utilizar o projeto, siga os passos abaixo:

* Instale o XAMP em sua maquina no seguinte link:

```
https://www.apachefriends.org/pt_br/index.html

```

* Clone o repositório para sua máquina local:

```
git clone https://github.com/marcelitos1v9/Crud-PHP-MVC.git

```
* Crie um banco de dados MySQL e importe o arquivo database.sql que está na raiz do projeto para criar a tabela necessária usando o mysql do <b>XAMP</b>


![image](https://user-images.githubusercontent.com/123131698/228087148-3e8c2c88-3bcf-4798-8f0b-6609cfe1bca6.png)



* Configure o arquivo conexao.php com as credenciais do seu banco de dados;

![image](https://user-images.githubusercontent.com/123131698/228087506-0253db5c-5944-4da4-946d-c60e0a497f94.png)


* Abra o arquivo index.php no seu navegador e teste as funcionalidades.

A seguir, uma breve descrição das pastas e arquivos do projeto:

* models/conexao.php: arquivo de configuração que define as credenciais do banco de dados;
* controllers/: pasta que contém os arquivos responsáveis por controlar a lógica de negócio da aplicação;
* models/: pasta que contém os arquivos responsáveis por abstrair o acesso ao banco de dados;
* views/: pasta que contém os arquivos responsáveis por exibir as informações ao usuário;
* index.php: arquivo principal que define as rotas da aplicação.

<h3>Considerações finais</h3>

Esse projeto foi desenvolvido com o intuito de demonstrar como é possível organizar um projeto em camadas seguindo o padrão arquitetural MVC. No entanto, existem muitas outras formas de organizar um projeto, e a escolha da melhor abordagem depende do contexto e das necessidades específicas de cada projeto.
