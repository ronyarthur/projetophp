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
</head>
<body>
    <h2>Cadastro</h2>
    <form action="" method="POST">
        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" maxlength="16" required>
        </p>
            <label for="telefone">telefone</label>
            <input type="tel" name="telefone" id="telefone" maxlength="11" required>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
        <p>
            <a href="login.php" role="button">Já tem uma conta? Faça login</a>
        </p>
    </form>
</body>
</html>
