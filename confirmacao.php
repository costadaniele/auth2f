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

  <?php
  $token = $_POST['token'];
  $codigo = $_POST['codigo'];

  $conEmail = $_POST['conemail'];
  $conSenha = $_POST['consenha'];

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if ($codigo === $token && $conEmail === $email && $conSenha === $senha) {
    echo "<div class='toast toast-success'>
        <p>Tudo certo por aqui, obrigada(o) $email. Bem-vinda(o)! <span class='ok'> &check; </span> </p>
      </div>";
  } else {
    echo "<div class='toast toast-error'>
        <p>Ops, os dados não foram validados, por favor verfique-os novamente <span class='no'>&cross; </p>
      </div>";
  }
  ?>
</body>

</html>