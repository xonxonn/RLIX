<?php
    
    if (isset($_POST['submit'])) 
    {
        //print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['sobrenome']);
        //print_r('<br>');
        //print_r($_POST['nomeusuario']);
        //print_r('<br>');
        //print_r($_POST['senha']);
    

        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nomeusuario = $_POST['nomeusuario'];
        $senha = $_POST['senha'];
        $confirmasenha = $_POST['confirmasenha'];

        $result = mysqli_query($conexao, "INSERT INTO dados_login (primeiro_nome,sobrenome,nome_de_usuario,senha,senha_confirmacao) VALUES ('$nome' ,'$sobrenome','$nomeusuario','$senha','$confirmasenha')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
}

.container {
    width: 50%px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur;
    box-shadow: 0px 3px 10px #464646;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

fieldset{
    border: transparent;
}

.form {
    width: 60%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: transparent;
    box-shadow: 0px 3px 10px #464646
    padding: 3rem;
    backdrop-filter: blur();
}

.form-header {
    margin-bottom: 3rem;
    display: flex;
    justify-content: space-between;
}

.login-button {
    display: flex;
    align-items: center;
}

.login-button button {
    border: none;
    background-color: #000;
    padding: 0.4rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.login-button button:hover {
    background-color: #48D1CC;
}

.login-button button a {
    text-decoration: none;
    font-weight: 500;
    color: #fff;
}

.form-header h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: #48D1CC;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}

.input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 0;
}

.input-box {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
}

.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 0px 3px 10px #464646;
    font-size: 0.8rem;
}

.input-box input:hover {
    background-color: #A3F7F9;
}

.input-box input:focus-visible {
    outline: 1px solid #6c63ff;
}

.input-box label,
.gender-title h6 {
    font-size: 0.75rem;
    font-weight: 600;
    color: #000;
}

.input-box input::placeholder {
    color: #000;
}

.logo{
    margin-top: 0%;
    display: absolute;
    padding: 0 0 0 7%;
}

.inputSubmit{
    background-color:#48D1CC;
    width: 100%;
    border: none;
    padding: 15px;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
      
    </style>

    <title>Cadastre-se RLIX</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="cadastre-se.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="Username">Nome de Usuário</label>
                        <input id="Username" type="text" name="nomeusuario" placeholder="Nome de Usuário" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmasenha" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <button class="inputSubmit" type="submit" name="submit">Cadastrar</button>

            </form>
        </div>

        <div class="logo">
            <img src="imagens/logo2.png">
        </div>

    </div>
</body>

</html>

