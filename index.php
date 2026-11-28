<!-- tela inicial -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="telasDeLogin.css">
</head>

<body>
    <section class="container">
        <div class="amarela">
            <h1 class="dentro">Entrar:</h1>
            <form class="formulario" action="cadastro.php" method="POST">
                <label for="nome">Nome:</label>

                <input type="text" name="nome" placeholder="Insira Nome Aqui">

                <label for="email">Email:</label>

                <input type="email" name="email" placeholder="Insira Email Aqui">

                <label for="senha">Senha:</label>

                <input type="password" name="senha" placeholder="Insira Senha Aqui">

                <br>
                <button type="submit">Enviar</button>
            </form>
            <form class="formulario" action="criarConta.php" method="POST">
                <button type="submit">Criar Conta</button>
            </form>
        </div>
    </section>




</body>

</html>


