<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-image: linear-gradient(45deg, #dafea4, #f254a8);
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        .box{
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
        }
        input{
            width: 100%;
            padding: 5px;
            outline: none;
            border-radius: 10px;
        }
        #submit{
            width: 100%;
            background-color: dodgerblue;
            cursor: pointer;
            color: #fff;
            border: none;
        }
        #submit:hover{
            background-color: deepskyblue;
        }
        h1{
            color: white;
        }
        a{
            text-decoration: none;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Login</h1>
        <input type="email" placeholder="E-mail">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <input type="submit" placeholder="Enviar" id="submit">
        <p>Não tem uma conta? <a href="cadastro.html"><u>Cadastre-se.</u></a></p>
    </div>
</body>
</html>
$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,cpf,nascimento)
VALUES('$nome','$email','$senha','$cpf','$nascimento')");

$nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];