<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/cadastro-contatos/main.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/cadastro-contatos/button.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/cadastro-contatos/records.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/cadastro-contatos/modal.css">
    <title>Cadastro de contatos</title>
</head>
<body>
    <header>
        <h1>Cadastro de contatos</h1>
    </header>
    <main>
        <button type="button" class="button blue mobile" id="cadastrarContato">Cadastrar Contato</button>
        <table class="records">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>CPF:</th>
                    <th>E-mail:</th>
                    <th>Telefone:</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
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
                        <a href='?apagar=<?php echo $resultado->id;?>' id='btn-excluir' class="a red">Excluir</a>
                        <a href='?editar=<?php echo $resultado->id;?>' id='btn-editar'class="a green">Editar</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="modal" id="modal">
                <div class="modal-content">
                    <header class="modal-header">
                        <h2>Novo Contato</h2>
                        <span class="modal-close" id="modalClose">&#10006;</span>
                    </header>
                    <form id="formulario" method="POST" class="modal-form">
                        <input type="text" class="modal-field" name="nome" id="nome" require placeholder="Nome*">
                        <input type="text" class="modal-field" name="sobrenome" id="sobrenome" require placeholder="Sobrenome*">
                        <input type="text" class="modal-field" name="cpf" id="cpf" placeholder="CPF">
                        <input type="email" class="modal-field" name="email" id="email" placeholder="exemplo@email.com">
                        <input type="number" class="modal-field" name="telefone" id="telefone" require placeholder="Telefone*">
                        <footer class="modal-footer">
                            <input type="submit" class="button green" value="Enviar" name="enviar" id="enviar">
                        </footer>
                    </form>
                </div>
            </div>

            <div class="records" id="modal">
                <div class="modal-content">
                    <header class="modal-header">
                        <h2>Editar Contato: <?php verificarId();?></h2>
                    </header>
                    <form id="formulario" method="POST" class="modal-form">                    
                        <input type="text" class="modal-field" name="nomeEditar" id="nomeEditar" require placeholder="Digite o novo nome">
                        <input type="text" class="modal-field" name="sobrenomeEditar" id="sobrenomeEditar" require placeholder="Digite o novo Sobrenome">
                        <input type="text" class="modal-field" name="cpfEditar" id="cpfEditar" placeholder="Novo CPF">
                        <input type="email" class="modal-field" name="emailEditar" id="emailEditar" placeholder="Novo e-mail">
                        <input type="number" class="modal-field" name="telefoneEditar" id="telefoneEditar" require placeholder="Novo telefone">
                        <footer class="modal-footer">
                            <input type="submit" class="button green" value="Atualizar" name="enviarEditar" id="enviarEditar">
                        </footer>
                    </form>
                </div>
            </div>
    </main>    
    <footer>Dev by Giovane</footer>
    <script src="/wordpress/wp-content/themes/cadastro-contatos/scripts.js"></script>
</body>
</html>