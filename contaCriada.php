<!-- tela para quando a conta for criada -->
<?php
    include "src\cliente.php";
    $_POST["id"] = uniqid();
    if(cadastrarCliente($_POST,"usuarios.json") == true)
    {
       
        echo 
        "<script>
            alert('Usuario cadastrado');
            window.location.href = 'index.php';
        </script>";
    }
    else
    {
        echo 
        "<script>
            alert('Usuário já existe!');
            window.location.href = 'criarConta.php';
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
</head>

<body>
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



