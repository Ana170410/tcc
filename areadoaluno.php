<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ferramenta-de-mao.png">
    <title> Área do aluno </title>
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
            justify-content: left;
            border-radius: 15px;
            width: 40%;
            min-width: 5px ;
            max-width: 90px;
            border: none;
            outline: none;
            padding: 20px;
        }
        strong{
            color:#f68c68;
        }
        h1{
            color:black;
            text-align: left;
            font-size: 30px;
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
            width: 10%;
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
            border-radius: 15px;
            padding: 5px;
        }
        input:hover{
            background-color: #f59a7c;
        }
    </style>
</head>
<body>
    <h2><img src="estudante.png" style="margin-left: 10px; max-width: 100px;"/>Olá Aluno!</h2>
    <div class="form-group">
        <div class="box">
            <p> <a href="http://localhost/home-page/home.php"> Início </a></p>
            <p> Salvos </p>
            <p> Favoritos </p>
        </div>
    </div>
    <br>
    <div class="form-group">
    <label class="col-md-2 control-label text-black"> Escolha uma matéria </label>
    <select name="Escolha a matéria" class="form-control select">
        <option> Selecione </option>
        <option> Matemática </option>
        <option> História </option>
        <option> Geografia </option>
        <option> Química </option>
    </select>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label text-black"> Conteúdos </label>
    <select name="Conteúdos" class="form-control select">
        <option selected value=""> Selecione a sua turma </option>
            <option> 1º </option>
            <option> 2º </option>
            <option> 3º </option> 
    </select>
    </div>
    <div class="form-group">
    <label> Vídeos </label><br><br>
    <button class="botao" type="submit" submit=""> Vizualizar </button><br>

    <br>
    <label> PDFs </label><br><br>
    <button class="botao" type="submit" submit=""> Vizualizar</button><br>

    <br>
    <label> Jogos </label><br><br>
    <button class="botao" type="submit" submit=""> Vizualizar </button>
    </div>
    <br>

<form action="http://localhost/home-page/home.php">

    <input type="submit" value="↩" >
        
</form>
</body>
</html>
