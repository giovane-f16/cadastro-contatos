<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/cadastro-contatos/style.css">
    <title>Cadastro de contatos</title>
</head>
<body>
    <h1>Cadastro de contatos</h1>
    <div class="cadastro">
        <form id="formulario" method="POST">
            <input type="hidden" value="http://localhost/wordpress/" name="url" id="url">
            <fieldset>
                <label for="nome"><b>Nome*</b></label>
                <input type="text" name="nome" id="nome" require placeholder="Digite seu nome">

                <label for="nome"><b>Sobrenome*</b></label>
                <input type="text" name="sobrenome" id="sobrenome" require placeholder="Sobrenome">

                <label for="cpf"><b>CPF</b></label>
                <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx">

                <label for="email"><b>E-mail</b></label>
                <input type="email" name="email" id="email" placeholder="exemplo@email.com">
                
                <label for="telefone"><b>Telefone*</b></label>
                <input type="number" name="telefone" id="telefone" require placeholder="(xx)xxxxx-xxx">
                
                <input type="submit" value="Enviar" name="enviar" id="enviar">
            </fieldset>
        </form>
    </div>
    <div class="listar">
        <h2>Listar:</h2>
        <table>
            <tr>
                <th>ID: </th>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>CPF:</th>
                <th>E-mail:</th>
                <th>Telefone:</th>
                <th>Ações</th>
            </tr>
            <?php
                global $wpdb;
                $resultados = $wpdb->get_results("SELECT * FROM contatos ORDER BY id ASC");
                foreach($resultados as $resultado){ 
            ?>
            <tr>
                <td><?php echo $resultado->id;?></td>
                <td><?php echo $resultado->nome;?></td>
                <td><?php echo $resultado->sobrenome;?></td>
                <td><?php echo $resultado->cpf;?></td>
                <td><?php echo $resultado->email;?></td>
                <td><?php echo $resultado->telefone;?></td>
                <td>
                    <a href='?apagar=<?php echo $resultado->id;?>' id='excluir'>Excluir</a>
                    <a href='?editar=<?php echo $resultado->id;?>' id='editar'>Editar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/wordpress/wp-content/themes/cadastro-contatos/scripts.js"></script>
</body>
</html>