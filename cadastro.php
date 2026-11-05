<?php
    extract($_POST);
    $conteudo = "\n[\n    Nome: $nome\n    Email: $email\n    Senha: $senha\n]";
    
    if(strpos(file_get_contents("usuarios.txt"), $email) == true) {
        echo "usuario ja esxixtente";
    }
    else {
        echo "usuario cadastrado com sucesso!";
        file_put_contents("usuarios.txt", $conteudo, FILE_APPEND);
    }
?>
