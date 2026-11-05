<?php
    extract($_POST);
    $conteudo = "\n[\n    Nome: $nome\n    Email: $email\n    Senha: $senha\n]";
    
    if(str_contains(file_get_contents("usuarios.txt"), $email) == true) {
        echo "usuario ja existe";
    }
    else {
        echo "usuario cadastrado";
        file_put_contents("usuarios.txt", $conteudo, FILE_APPEND);
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
            <h1>lugar teste</h1>
            <form action="index.php">
                <button type="submit">Tela Inicial</button>
            </form>
        </div>
    </section>




</body>

</html>



