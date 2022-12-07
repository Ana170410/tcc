<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ferramenta-de-mao.png">
    <title>Área do professor</title>
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
            width: 50%;
            min-width:5px ;
            max-width: 150px;
            border: none;
            outline: none;
            padding: 20px;
        }
        strong{
            color:#f68c68;
        }
        label,h2{
            color:black;
            text-align: left;
            padding: 5px;
        }
        a,ul{
            color: #fff;
            text-align: left;
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
            width: 20%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: #f59a7c;
            cursor: pointer;
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
    </style>
</head>
<body>
    <h2><img src="pilha-de-tres-livros.png" style="margin-left: 5px; max-width: 50px;"/> Olá professor(a)!</h2>
    <div class="form-group">
    <div class="box">
            <p> <a href="home page.html"> Início </a></p>
            <p> <a href="Login.html"> Login </a></p>
            <p> Salvos </p>
            <p> Sair </p>
    </div>
    </div>

    <div class="form-group">
    <label> Conteúdos </label>
    <select id="Conteúdos">
        <option selected value=""> Selecione a turma </option>
            <option> 1º </option>
            <option> 2º </option>
            <option> 3º </option>
    </select>
    </div>

    <div class="form-group">
    <label> Vídeos </label><br><br>
    <button class="botao" type="submit" submit=""> Adicionar mais +</button><br>

    <br>
    <label> PDFs </label><br><br>
    <button class="botao" type="submit" submit=""> Adicionar mais +</button><br>

    <br>
    <label> Jogos </label><br><br>
    <button class="botao" type="submit" submit=""> Adicionar mais +</button><br><br>
</div>
<br>
<form action="http://localhost/home-page/home.php">

  <input type="submit" value="↩" >
        
</form>
</body>
</html>
