<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça o seu login | Tool Teacher</title>
    <link rel="shortcut icon" href="ferramenta-de-mao.png"/>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, whitesmoke, white);
            color:black;
        }
        div{
            background-color: #f5aa92;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: #f68c68;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: #f59a7c;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color:white;
            border: none;
            background-color: #f68c68;
            border-radius: 15px;
            padding: 10px;
        }
        a:hover{
            background-color: #f59a7c;
        }
    </style>
</head>
<body>
    <br>
        <a href="http://localhost/home-page/home.php">Voltar para o ínicio</a>
    <div>
        <h1><img src="login.png" style="margin-right: 10px; max-width: 60px;"/> Login</h1>
        <br><br>
        <form action="testeLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email" class="form-username form-control email hide " id="form-email">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Enviar</button><br>
        <p><a href="http://localhost/formulario/formulario.php">Não tenho login</a></p>
    </form>
    </div>
</body>
</html>
