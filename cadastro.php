<!-- tela quando o usuário tenta fazer login -->
<?php
    session_start();
    include_once('src/cliente.php');

    $resultado = localizarClientePorEmail($_POST['email']);
    
   
    if ($resultado['nome'] == $_POST["nome"] && $resultado['email'] == $_POST["email"] && $resultado['senha'] == $_POST["senha"])
    {
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['senha'] = $resultado['senha'];
    }
    else
    {
        echo"<script>
                alert('Usuário Não Existe!');
                window.location.href = 'index.php';
            </script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
</head>

<body>
    <header>
        <div>
            <img class="estrelinha" src="Assets\Star 4.png" alt="estrela">
            <img class="estrelinha" src="Assets\Star 4.png" alt="estrela">
        </div>
        <form action="index.php">
            <button type="submit">Tela Inicial</button>
        </form>
        <div>
            <img class="estrelinha" src="Assets\Star 4.png" alt="estrela">
            <img class="estrelinha" src="Assets\Star 4.png" alt="estrela">
            <img class="estrelinha" src="Assets\Star 4.png" alt="estrela">
        </div> 
    </header>
    <div id="divEsquerda">
        <img id="cortina" src="Assets\esquerda e direita.png" alt="">
    </div>
    <div id="divDireita">
        <img id="cortina" src="Assets\esquerda e direita.png" alt="">
    </div>
<section class="emCartaz">
  <h1 class="titulo">Em Cartaz</h1>

  <div class="carrossel-wrapper">
    <button class="btn prev" type="button">&#10094;</button>
    <div id="carrocelEmCartaz">
      <a href="filme1.html" class="filme">
        <h2>Filme 1</h2>
      </a>
      <a href="filme2.html" class="filme">
        <h2>Filme 2</h2>
      </a>
      <a href="filme3.html" class="filme">
        <h2>Filme 3</h2>
      </a>
      <a href="filme4.html" class="filme">
        <h2>Filme 4</h2>
      </a>
      <a href="filme3.html" class="filme">
        <h2>Filme 5</h2>
      </a>
      <a href="filme3.html" class="filme">
        <h2>Filme 6</h2>
      </a>
      <a href="filme3.html" class="filme">
        <h2>Filme 7</h2>
      </a>
      <a href="filme3.html" class="filme">
        <h2>Filme 8</h2>
      </a>
      <a href="filme3.html" class="filme">
        <h2>Filme 9</h2>
      </a>
    </div>
    <button class="btn next" type="button">&#10095;</button>
  </div>
</section>
    <img src="Assets\divisoria de sections.png" alt="" style="margin-top: 3vh;">
    <section class="preVenda">
        <h1 class="titulo">Pré Venda</h1>
        <div id="carrocelPreVenda">
            <div class="PreVenda">
                <h1>teste</h1>
            </div>
            <div class="PreVenda">
                <h1>teste</h1>
            </div>
            <div class="PreVenda">
                <h1>teste</h1>
            </div>
        </div>
        <div id="carrocelPreVenda">
            <div class="PreVenda">
                <h1>teste</h1>
            </div>
            <div class="PreVenda">
                <h1>teste</h1>
            </div>
            <div class="PreVenda">
                <h1>teste</h1>
            </div>
        </div>
    </section>



    <script src="script.js"></script>
</body>

</html>



