<?php
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');

    include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $senha = array ('senha'=> 123, true );


        $result = mysqli_query($conexao, "INSERT INTO usuarios('nome','senha','email')
        VALUES ('$nome','$senha','$email')");

        header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Criar conta | Tool Teacher</title>
    <link rel="shortcut icon" href="ferramenta-de-mao.png">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,whitesmoke, white);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #f5aa92;
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            min-width:320px ;
            max-width:800px;
        }
        fieldset{
            border: 3px solid #f68c68;
        }
        legend{
            border: 1px solid #f68c68;
            padding: 10px;
            text-align: center;
            background-color: #f68c68;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: whitesmoke;
        }
        #submit{
            background-image: linear-gradient(to right,#f68c68, #f3c2b2);
            width: 100%;
            border: none;
            border-color: white;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,#f68c68, #f3c2b2);
        }
        p{
            margin:auto 10%;
            margin:top 2%;
            justify-content: right;
        }
        input{
            text-decoration: none;
            color:white;
            border: 3px solid #f68c68;
            background-color: #f68c68;
            border-radius: 10px;
            padding: 5px;
        }
        input:hover{
            background-color: #f59a7c;
        }
        a{
            text-decoration: none;
            color:white;
            border: none;
            background-color: #f68c68;
            border-radius: 15px;
            padding: 10px;
            text-align: left;
        }
        a:hover{
            background-color: #f59a7c;
        }
    </style>
</head>
<body><br>
    <a href="http://localhost/home-page/home.php">Voltar para o ínicio</a><br>
    <br>
    <div><p><img src="caixa de mensagem.png" style="margin-right: 15px; max-width: 30px;"> Olá professor, caso não possua uma conta crie uma abaixo.</img></p></div>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Crie uma conta</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" senha="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                    <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset><br>
            <p><a href="http://localhost/tela-login/login.php">Já tenho login</a></p>
        </form><br>       
</div><br>

</body>
</html>
