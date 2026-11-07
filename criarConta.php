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
            <h1>Criar Conta</h1>
            <form action="contaCriada.php" method="POST">
                <label for="nome">Nome:</label>
                <br>
                <input type="text" name="nome" placeholder="Insira Nome Aqui" required>
                <br>
                <label for="email">Email:</label>
                <br>
                <input type="email" name="email" placeholder="Insira Email Aqui" required>
                <br>
                <label for="senha">Senha:</label>
                <br>
                <input type="password" name="senha" placeholder="Insira Senha Aqui" required>
                <br>
                <br>
                <button type="submit">Enviar</button>

            </form>
        </div>
    </section>




</body>

</html>



