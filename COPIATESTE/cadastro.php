<?php
include('conexao.php');

//** Verificando se o formulário foi enviado */
if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['telefone'])) {

    //** verificando se os campos de email e senha não estao vazios */
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }
    else if(strlen($_POST['telefone']) == 0){
        echo "preencha seu telefone";
    }
    else {
    //** limpando os dados */
        $mail = $mysqli->real_escape_string($_POST['email']);
        $senha = $_POST['senha'];
        $tel = $_POST['telefone'];

        //**Se o e-mail não existir, criamos um novo usuário */
        $sql_code = "SELECT * FROM usuarios WHERE email = '$mail'";
        $sql_query = $mysqli->query($sql_code);
        
        if ($sql_query->num_rows > 0) {
            //** Se o e-mail já existir, mostramos uma mensagem de erro*/
            echo "Este e-mail já está registrado. Tente outro.";
        } else {
            //** Se o e-mail não existir, criamos um novo usuário */ 

            // Inserindo o novo usuário no banco de dados
            $sql_code = "INSERT INTO usuarios (email, senhas, telefone) VALUES ('$mail', '$senha', '$tel')";
            if ($mysqli->query($sql_code)) {
                echo "Cadastro realizado com sucesso! <a href='login.php'>Clique aqui para fazer login.</a>";
            } else {
                echo "Erro ao cadastrar. Tente novamente mais tarde.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/login-cadastro/cadastro.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>
<body>
     
    
    
    <div class="container">
    
        <form action="" method="POST">
        <img src="./img/logo.png" width="100px" >
            <h1 class="titulo">Cadastro</h1>
            <p>
                <input type="email" name="email" id="email" required placeholder="Email" >
            </p>
            <p>
                <input type="password" name="senha" id="senha" maxlength="8" minlength="8" required placeholder="Senha (8 digitos)">
            </p>
                <input type="tel" name="telefone" id="telefone" maxlength="11" minlength="11" required placeholder="Telefone">
            <p>
            <div class="naoTemConta">
                <p>
                    <a href="login.php" role="button" id="link">Já tem uma conta?</a>
                 </p>
            </div>
            <button type="submit">Cadastrar</button>
            </p>
            
        </form>
    </div>
</body>
</html>
