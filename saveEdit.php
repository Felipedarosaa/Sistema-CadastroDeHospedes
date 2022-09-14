<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
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
    
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',cpf ='$cpf',senha='$senha',email='$email',telefone='$telefone',cidade='$cidade',estado='$estado',endereco='$endereco', pessoas='$pessoas', data_entrada='$data_entrada', data_saida='$data_saida', quarto='$quarto', valor='$valor' WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');
?>