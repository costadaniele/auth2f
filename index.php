<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
	  rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>2F</title>
</head>
<body>
    <?php 
        echo
            "<form class='formulario' action='token.php' method='POST'>

                <h1 id='titulo_form'>Cadastro de Segurança</h1>
                
                <h3 id='aviso_p_validacao'>
                   Insira seus dados 
                </h3>
                    
                <label class='form-label' for='email'>Nome:</label>
                <input 
                    class='form-input' 
                    type='text' 
                    name='nome_pessoa' placeholder='digite o seu nome'
                    id='email' required>

                <label class='form-label' for='email'>Email:</label>
                <input 
                    class='form-input' 
                    type='email' 
                    name='email' placeholder='ex: email.@gmail.com'
                    id='email' required>
                     
               
                
                <button id='btn_enviar' name='btn_enviar' class='btn btn-primary' type='submit'>
                    Enviar código ao email
                </button>

            </form>";
        ?>
</body>
</html>