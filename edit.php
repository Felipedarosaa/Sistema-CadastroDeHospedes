<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $cpf = $user_data['cpf'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
                $pessoas = $user_data['pessoas'];
                $data_entrada = $user_data['data_entrada'];
                $data_saida = $user_data['data_saida'];
                $quarto = $user_data['quarto'];
                $valor = $user_data['valor'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
         body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(100, 100, 200), rgb(17, 54, 71)); 
            /* background-color: #4F4F4F; */
        }

        .box {
            color: white;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 20px;
            width: 30%;
        }

        fieldset {
            border: 3px solid white;
        }

        legend {
            border: 1px solid darkblue;
            padding: 10px;
            text-align: center;
            background-color: darkblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 15px;
            color: dodgerblue;
        }

        #data_entrada {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #data_saida {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-color: blue;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-color: dodgerblue;
        }

        #voltar {
            background-color: black;
            text-decoration: none;
            font-size: 25px;
            color: white;
            border: 3px solid white;
            padding: 5px;
            margin-left: 200px;
            margin-bottom: 500px;
        }

        #voltar:hover {
            background-color: blue;
        }
    </style>
</head>
<body>
    <a id="voltar" href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
        <fieldset>
                <legend><b>Editar Hóspedes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>    

                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br><br><br>    

                <div class="inputBox">
                    <input type="text" name="pessoas" id="pessoas" class="inputUser">
                    <label for="pessoas" class="labelInput">Nº Pessoas</label>
                </div>
                <br>

                <label for="data_entrada"><b>Data de Entrada</b></label>
                <input type="date" name="data_entrada" id="data_entrada">
                <br><br>
                <label for="data_saida"><b>Data de Saída</b></label>
                <input type="date" name="data_saida" id="data_saida">
                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="quarto" id="quarto" class="inputUser">
                    <label for="quarto" class="labelInput">Nº Quarto:</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="valor" id="valor" class="inputUser" placeholder="R$">
                    <label for="valor" class="labelInput">Valor Total:</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>