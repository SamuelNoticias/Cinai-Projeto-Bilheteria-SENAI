<?php
    /**
     * Vai pegar o nome, email e senha e armazenar em JSON
     * Esse dados serão importantes para gerenciar o perfil do usuario
     */
    function cadastrarCliente(array $dados,string $arquivo)
    {
        $conteudo = json_encode($dados, JSON_FORCE_OBJECT);
        $desconteudo = json_decode($dados);
        if(str_contains(file_get_contents($arquivo), $dados["email"]) == true) 
        {

            echo "usuario ja existe";
        }
        if(str_contains(file_get_contents($arquivo), $dados["email"]) == false)
        {
            echo $desconteudo;
            file_put_contents($arquivo, $conteudo, FILE_APPEND);
        }
    }


    /**
     * Autenticar sessão de uso do cliente
     */
    function logarClietne(){}


?>