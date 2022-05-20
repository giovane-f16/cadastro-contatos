# Cadastro de contatos
Tema desenvolvido no WordPress utilizando HTML5, CSS3, JavaScript e PHP 8.0.13.

## Objetivo
Realizar um cadastro de contato, contendo a possibilidade de edição após ser salvo, os campos disponíveis são: 

- Nome*
- Sobrenome*
- CPF
- E-mail
- Telefone*

(marcados com * os obrigatórios).

Todos os cadastros realizados são guardados no Banco de Dados MySQL.

## Instalação

1. Antes de tudo, você já deve ter o ambiente com o seu servidor web, o MySql e o Wordpress instalado. Neste projeto utilizei o Xampp para Windows.

2. Crie uma pasta chamada **cadastro-contatos** no caminho: **/xampp/htdocs/wordpress/wp-content/themes/** e faça o clone do repositório.


        git clone https://github.com/giovane-f16/cadastro-contatos
        
3. No MySQL, dentro do banco de dados wordpress, realize a criação da tabela contatos com as colunas: nome, sobrenome, cpf, email e telefone, adicionando um ID como Primary Key e telefone como Unique.

    A estrutura tem que ficar da seguinte maneira:
    
| Imagem 1 | Imagem 2 |
|----------|----------|
|![image1](https://user-images.githubusercontent.com/63614241/168440686-a93cabf9-1561-49cb-8835-bcfef304ff64.png)| ![image](https://user-images.githubusercontent.com/63614241/168440830-97465fd7-d0a5-435f-85b2-1a2224d77269.png)

4. Ative o tema no seu wp-admin.

<hr>

## Prévia

![image](https://user-images.githubusercontent.com/63614241/168320831-f83458ae-d8a4-4b83-a138-b96db02bc282.png)

![image](https://user-images.githubusercontent.com/63614241/168320904-2a87865b-9bfa-4ea4-9860-e09c0dc8e0bc.png)

![image](https://user-images.githubusercontent.com/63614241/168321107-6688529e-2b3f-4d6f-88bc-8f31cfa38034.png)

