<?php
    session_start();
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["senha"] = $_POST["senha"];
    
    $teste = json_decode(file_get_contents("usuarios.json"),true);

  

    foreach ($teste as $key => $value) {
        var_dump($teste["email"]);
        $indice = array_search($teste["email"], $value);
    }

    var_dump($indice);
  
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



