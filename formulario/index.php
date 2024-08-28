<?php
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,cpf,nascimento)
    VALUES('$nome','$email','$senha','$cpf','$nascimento')");


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            background-image: linear-gradient(45deg, #dafea4, #f254a8);
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }

        .box {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            align-items: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
        }

        #nome {
            border-radius: 10px;
            outline: none;
            padding: 5px;
            width: 100%;
        }

        #email {
            border-radius: 10px;
            outline: none;
            padding: 5px;
            width: 100%;
        }

        #senha {
            border-radius: 10px;
            outline: none;
            padding: 5px;
            width: 100%;
        }

        #cpf {
            border-radius: 10px;
            outline: none;
            padding: 5px;
            width: 100%;
        }

        #nascimento {
            padding: 5px;
            outline: none;
            border-radius: 10px;
        }

        #cadastrar {
            border-radius: 10px;
            outline: none;
            padding: 5px;
            width: 100%;
            background-color: dodgerblue;
            color: white;
        }

        #cadastrar:hover {
            background-color: deepskyblue;
        }
    </style>
</head>

<body>
    <form action="login.php" method="post">
    <div class="box">
        <h1>Cadastro</h1>
        <input type="text" id="nome" placeholder="Nome" name="nome">
        <br><br>
        <input type="email" placeholder="E-mail" id="email" name="email" required>
        <br><br>
        <input type="password" placeholder="Senha" id="senha" name="senha" required>
        <br><br>
        <input type="text" placeholder="CPF" id="cpf" name="cpf" required>
        <br><br>
        <label for="data">Data de Nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" required>
        <br><br>
        <button type="submit" name="submit">Enviar</button>
    </div>
    </form>
    
</body>

</html>