<?php
    include('conexao.php');
    //**** verificando se existe as variaveis mail e senha no banco de dados */
    if(isset($_POST['email']) || isset($_POST['senhas'])){

        //**verificar se o email e senha foi escrito em branco */
        if(strlen($_POST['email']) == 0) {
        } else if(strlen($_POST['senha']) == 0){
        } else{
            //** serve para deixar o codigo mais seguro, vai limpar a string que entrar nela */
            $mail = $mysqli -> real_escape_string($_POST['email']);
            $senha = $mysqli -> real_escape_string($_POST['senha']);

            //** verificando se o usuario existe */

            $sql_code = "SELECT * FROM usuarios WHERE email = '$mail' AND senhas = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("falha na execução do codigo sql". $mysqli -> error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                //** pegar o dados do banco de dados e jogar na string usuario  */
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                
                header("location: index.php");

            }else {
                echo "Falha ao logar email ou senha incorretos"; 
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/login-cadastro/login.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
    <script src="./css/login-cadastro/login.js"></script>
</head>
<body>
   
    <div class="container">
        
        <form action="" method="POST"> 
        <img src="./img/logo.png" width="100px" >
            <h1 class="titulo">LOGIN</h1>
            <p>
                <input type="email" name="email" required placeholder="E-mail" id="email">
            </p>
            
            <p>
                <input type="password" name="senha"  required placeholder="senha" id="senha" >
            </p>
            <p class="naoTemConta">
            <a href="cadastro.php" role="button" id="link">Não tem conta ainda?</a>
            </p>
            <p>
                <button type="submit">ENTRAR</button>
            </p>
            
            
        </form>
    </div>
    
</body>
</html>