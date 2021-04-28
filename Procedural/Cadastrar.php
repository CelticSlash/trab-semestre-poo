<?php

    /*Código para enviar os dados para o DB*/

    $razao_social = $_POST['razao_social'];
    $nome_responsavel = $_POST['nome_responsavel'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $data_abertura = $_POST['data_abertura'];
    $equipamento = $_POST['equipamento'];
    $garantia = $_POST['garantia'];
    $patrimonio = $_POST['patrimonio'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descricao = $_POST['descricao'];

    $data_abertura = implode("-", array_reverse(explode("/", $data_abertura)));

    $servername = "localhost";
    $database = "chamado_tecnico";
    $username = "root";
    $password = "";

    ini_set('default_charset','UTF-8');

    $conn = mysqli_connect($servername, $username, $password, $database);
    $query = "INSERT INTO tbl_chamado (razao_social, nome_responsavel, endereco, cidade, estado, data_abertura, equipamento, garantia, patrimonio, marca, modelo, descricao, situacao) VALUES ('".$razao_social."', '".$nome_responsavel."','".$endereco."','".$cidade."','".$estado."','".$data_abertura."','".$equipamento."','".$garantia."','".$patrimonio."','".$marca."','".$modelo."','".$descricao."','Em Análise')";

    $conn->query("SET NAMES utf8");

    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        if($razao_social == "" || $razao_social == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha a Razão Social!');window.location.href='Cadastrar.php'</script>";
        }elseif($nome_responsavel == "" || $nome_responsavel == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha o Nome do Responsável!');window.location.href='Cadastrar.php'</script>";
        }elseif($endereco == "" || $endereco == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha o Endereço!');window.location.href='Cadastrar.php'</script>";
        }elseif($cidade == "" || $cidade == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha a Cidade!');window.location.href='Cadastrar.php'</script>";
        }elseif($estado == "" || $estado == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha o Estado!');window.location.href='Cadastrar.php'</script>";
        }elseif($equipamento == "" || $equipamento == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha o Celular!');window.location.href='Cadastrar.php'</script>";
        }elseif($garantia == "" || $garantia == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha a Garantia!');window.location.href='Cadastrar.php'</script>";
        }elseif($patrimonio == "" || $patrimonio == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha o Patrimonio!');window.location.href='Cadastrar.php'</script>";
        }else
        if($marca == "" || $marca == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha a Marca!');window.location.href='Cadastrar.php'</script>";
        }elseif($modelo == "" || $modelo == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha o Modelo!');window.location.href='Cadastrar.php'</script>";
        }elseif($descricao == "" || $descricao == null)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Preencha a Descrição!');window.location.href='Cadastrar.php'</script>";
        }
        else{
            if($conn->query($query) === TRUE){
                print "<script language='javascript' type='text/javascript'>alert('Contrato efetuado com sucesso!');window.location.href='Ordem_servico.php'</script>";
            }else{
                echo "Erro: " .$query . "<br>" .$conn->error;
            }
        }
    }

?>
