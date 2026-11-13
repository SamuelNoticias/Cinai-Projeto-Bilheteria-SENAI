<?php
    session_start();
    include_once('src/cliente.php');

    $resultado = localizarClientePorEmail($_POST['email']);
    
   
    if ($resultado['email'] == $_POST["email"] && $resultado['senha'] == $_POST["senha"])
    {
        echo "entrou";
        var_dump($resultado); exit();
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
    <div class="cortina">
        <img src="Assets\em_cima-removebg-preview.png" class="img-base" alt="Imagem de fundo">
    </div>
    <div class="cortinas">
        <img src="Assets\esquerda-removebg-preview.png" class="cortina-esquerda" alt="cortina esquerda">
        <img src="Assets\direita-removebg-preview.png" class="cortina-direita" alt="cortina direita"> 
    </div>
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



