<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tool Teacher </title>
    <link rel="shortcut icon" href="ferramenta-de-mao.png">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, whitesmoke, white);
            color:black;
            justify-content: center;
        }
        div{
            position: relative;
            padding: 15px;
            border-radius: 15px;
            color: #fff;
            justify-content: center;
        
        }
        .box{
            border: 3px solid #f5aa92;
            background-color: #f5aa92;
            justify-content: center;
            border-radius: 15px;
            width: 40%;
            min-width:320px ;
            max-width:700px;
            border: none;
            outline: none;
            padding: 15px;
        }
        strong{
            color:#f68c68;
        }
        fieldset{
            border: none;
            justify-content: center;
        }
        h1{
            color:black;
            text-align: left;
            font-size: 30px;
        }
        label,h2{
            color:black;
            text-align: left;
        }
        a{
            text-decoration: none;
            color:white;
            border:none;
            background-color: #f68c68;
            border-radius: 10px;
            padding: 15px;
            width: 10%;
            text-align: left;
            font-size: 15px;
        }
        a:hover{
            background-color: #f59a7c;
        }
        select{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
            justify-content: center;
        }
        button{
            position: relative;
            background-color: #f68c68;
            border: none;
            padding: 15px;
            width: 10%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: #f59a7c;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <nav class="menu">
    <h1><img src="ferramenta-de-mao.png" class="logo" style="margin-right: 15px; max-width: 80px;"/><strong> Tool </strong> Teacher</h1>
    </nav>   
</header>
<div class="form-group">
    <h2>Bem-vindo!</h2>
    <div class="box">
    <p><img src="caixa de mensagem.png" style="margin-right: 15px; max-width: 20px;"/>Está plataforma é para auxiliar vocês professores e alunos na disponiblização de conteúdo, esperamos que aproveitem bastante!</p>
    </div>
</div>
    
    <div class="form-group">
    <label class="col-md-2 control-label text-black">- Quem você é? </label><br><br>
	<button class="botao" type="submit"><a href="http://localhost/formulario/formulario.php"> Professor </a></button>
	<button class="botao" type="submit"><a href="http://localhost/area-do-usuario/areadoaluno.php">Aluno </a></button>
    <div class="form-group"></div>
	<label>- Como posso ajudar?</label><br><br>
    <select name="- Como posso ajudar?" class="form-control select">
        <option value="mat-000">Selecione</option>
        <option value="mat-001"><a href="entrarcomloginajuda.html">Entrar com login na plataforma</a></option>
        <option value="mat-002"><a href="sairdaplataformaajuda.html"> Sair da plataforma </a></option>
        <option value="mat-003"><a href="contatoajuda.html">Entrar em contato com os nossos desenvolvedores</option>
    </select>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label text-black">- Política de privacidade</label><br><br>
        <select name="idpoliticadeprivacidade" class=" form-control select">
            <option>Selecione</option>
            <option> Termos e condições </option>
            <option> Sobre a plataforma </option>
        </select><br><br>
		<button class="botao" type="submit" submit="">Avançar</button>
    </div>
    <div class="form-group">
		<label><img src="login.png" style="margin-right: 10px; max-width: 30px;"/>Cadrastro (somente para professores!)</label>
        <br><br>
        <button><a href="http://localhost/formulario/formulario.php">Entrar</a></button>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
