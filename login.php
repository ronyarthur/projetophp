<?php
    include('conexao.php');
    //**** verificando se existe as variaveis mail e senha no banco de dados */
    if(isset($_POST['email']) || isset($_POST['senhas'])){

        //**verificar se o email e senha foi escrito em branco */
        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
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
</head>
<body>
    <form action="" method="POST"> 
        <p>
            <label>e-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">entrar</button>
        </p>
        <p>
        <a href="cadastro.php" role="button">criar uma conta</a>
        </p>
        
    </form>
</body>
</html>
