<?php 
global $wpdb;

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
    $apagar = $wpdb->delete('contatos', array('id' => $id));
}
?>