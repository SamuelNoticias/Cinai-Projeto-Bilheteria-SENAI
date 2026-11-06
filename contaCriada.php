<?php
<<<<<<< HEAD
=======
 

>>>>>>> e951cd4c24d54c6cbfa41e73004f16568e2eff1c
    $conteudo = json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    //var_dump($conteudo);
    //exit();



    
    if(str_contains(file_get_contents("usuarios.json"), $_POST["email"]) == true) {
        echo "usuario ja existe";
    }
    else {
        echo "usuario cadastrado";
        file_put_contents("usuarios.json", $conteudo, FILE_APPEND);
    }
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
            <h1>Conta criada com sucesso!</h1>
            <form action="index.php">
                <button type="submit">Tela Inicial</button>
            </form>
        </div>
    </section>




</body>

</html>



