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
            <fieldset>
                <label for="nome"><b>Nome*</b></label>
                <input type="text" name="nome" id="nome" require placeholder="Digite seu nome">

                <label for="sobrenome"><b>Sobrenome*</b></label>
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
                <th>ID:</th>
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
    <div class="editar">
        <form id="formularioEditar" method="POST">
            <fieldset>
                <h3>Editar</h3>
                <label for="nomeEditar"><b>Nome*</b></label>
                <input type="text" name="nomeEditar" id="nomeEditar" require placeholder="Digite o novo nome">

                <label for="sobrenomeEditar"><b>Sobrenome*</b></label>
                <input type="text" name="sobrenomeEditar" id="sobrenomeEditar" require placeholder="Digite o novo Sobrenome">

                <label for="cpfEditar"><b>CPF</b></label>
                <input type="text" name="cpfEditar" id="cpfEditar" placeholder="xxx.xxx.xxx-xx">

                <label for="emailEditar"><b>E-mail</b></label>
                <input type="email" name="emailEditar" id="emailEditar" placeholder="Novo e-mail">
                
                <label for="telefoneEditar"><b>Telefone*</b></label>
                <input type="number" name="telefoneEditar" id="telefoneEditar" require placeholder="Novo telefone">
                
                <input type="submit" value="Enviar" name="enviarEditar" id="enviarEditar">
            </fieldset>
        </form>
    </div>
    <footer>
    </footer>
    <script src="/wordpress/wp-content/themes/cadastro-contatos/scripts.js"></script>
</body>
</html>