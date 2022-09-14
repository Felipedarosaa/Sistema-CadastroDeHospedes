<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("img/bg1.jpg");
        }

        h1 {
            font-size: 35px;
        }

        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;    
        }

        input{
            padding: 15px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit{
            background-color: blue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover{
            background-color: dodgerblue;
            cursor: pointer;
        }

        #voltar {
            color: black;
            text-decoration: none;
            border: 3px solid blue;
            background-color: white;
            font-size: 25px;
            margin-left: 150px;
        }

        #voltar:hover {
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <a id="voltar" href="index.html">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>
</html>