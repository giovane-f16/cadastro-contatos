<?php 
global $wpdb;

$wpdb->show_errors();

// inserindo
if(!empty($_POST['enviar'])){
    if (!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['telefone'])){
        $nome      = sanitize_text_field($_POST['nome']);
        $sobrenome = sanitize_text_field($_POST['sobrenome']);
        $cpf       = sanitize_text_field($_POST['cpf']);
        $email     = sanitize_text_field($_POST['email']);
        $telefone  = sanitize_text_field($_POST['telefone']);
        
        $inserido = $wpdb->insert('contatos', array(
            'nome'      => $nome,
            'sobrenome' => $sobrenome,
            'cpf'       => $cpf,
            'email'     => $email,
            'telefone'  => $telefone
        ));
        if(!$inserido){
            echo "Não cadastrado"; // validar dados iguais
        }
    } else{
        echo 'Preencha os campos obrigatórios';
    }
}

// deletando
if(!empty($_GET['apagar'])){
    $id = sanitize_text_field($_GET['apagar']);
    var_dump($id);
    $apagar = $wpdb->delete('contatos', array('id' => $id));
}

// editando
if(!empty($_GET['editar'])){
    $id = sanitize_text_field($_GET['editar']);
    if(!empty($_POST['enviarEditar'])){
        $nomeEditar      = sanitize_text_field($_POST['nomeEditar']);
        $sobrenomeEditar = sanitize_text_field($_POST['sobrenomeEditar']);
        $cpfEditar       = sanitize_text_field($_POST['cpfEditar']);
        $emailEditar     = sanitize_text_field($_POST['emailEditar']);
        $telefoneEditar  = sanitize_text_field($_POST['telefoneEditar']);
        
        if(!empty($nomeEditar)){
            $wpdb->update('contatos', array(
                'nome' => $nomeEditar
            ), array('id' => $id));
        }
        if(!empty($sobrenomeEditar)){
            $wpdb->update('contatos', array(
                'sobrenome' => $sobrenomeEditar
            ), array('id' => $id));
        }
        if(!empty($cpfEditar)){
            $wpdb->update('contatos', array(
                'cpf' => $cpfEditar
            ), array('id' => $id));
        }
        if(!empty($emailEditar)){
            $wpdb->update('contatos', array(
                'email' => $emailEditar
            ), array('id' => $id));
        }
        if(!empty($telefoneEditar)){
            $wpdb->update('contatos', array(
                'telefone' => $telefoneEditar
            ), array('id' => $id));
        }
    }
}
?>