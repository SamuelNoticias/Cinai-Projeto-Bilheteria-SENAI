<!-- tela quando o usuário tenta fazer login -->
<?php
    session_start();
    include_once('src/cliente.php');

    $resultado = localizarClientePorEmail($_POST['email']);
    
   
    if ($resultado['nome'] == $_POST["nome"] && $resultado['email'] == $_POST["email"] && $resultado['senha'] == $_POST["senha"])
    {
        echo "entrou ";
        var_dump($resultado); 
        exit();
    }
    else
    {
        echo"<script>
                alert('Usuário Não Existe!');
                window.location.href = 'index.php';
            </script>";
    }

  
   
        //$indice = array_search($teste["email"], $value);
    //Acessar o array no indice certo
    /*
    if ($teste[$indice]['email'] == $_POST["email"] && $teste[$indice]['senha'] == $_POST["senha"])
    {
        $_SESSION['nome'] = $teste[1]['nome'];
    }
    */
    
  
    /*if(str_contains(file_get_contents("usuarios.json"),$_SESSION["email"]) && str_contains(file_get_contents("usuarios.json"),$_SESSION["senha"]))
        {
            echo "cleiton";
        }
    */


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container">
        <div class="amarela">
            <h1>lugar teste</h1>
            <form action="index.php">
                <button type="submit">Tela Inicial</button>
            </form>
        </div>
    </section>




</body>

</html>



