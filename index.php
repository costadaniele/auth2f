<!-- Esse código foi clonado de https://github.com/BrenoLins100/Autentica-o-de-duplo-fator-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
	rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Auth2f</title>
</head>
<body>

    <div class="container">
        <div class=" form-group formulario">        
        <?php 
            echo "<h1>Cadastro de Segurança</h1>";
            echo "<form action='codigo.php' method='POST'>";
            echo "<label class='form-label' for='email'>Email</label>";
            echo "<input class='form-input' type='email' name='email' id='email'>";
            echo "<label class='form-label' for='senha'>Senha:</label>";
            echo "<input class='form-input' type='password' name='senha' id='senha'>";

                $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                $result = '';
                $codigo = '';
                for ($i = 0; $i < 10; $i++)
                    $result .= $characters[mt_rand(0, 61)];
                    $codigo = $result; 
                    
                    echo " <br> <p>Código de acesso, guarde com você </p> <input class='form-input' type='text' name='codigo' readonly value='$codigo'> <br>";
                    echo "<button class='btn btn-primary' type='submit'>Confirme</button>";     
                    echo"</form>";
            ?>
        </div>
    </div>
</body>
</html>