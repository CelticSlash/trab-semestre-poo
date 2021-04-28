<?php 

    $valor = $_POST['valor'];
    $ordem_servico = $_POST['ordem_servico'];

    $servername = "localhost";
    $database = "chamado_tecnico";
    $username = "root";
    $password = "";

    ini_set('default_charset','UTF-8');

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
        die('Could not connect: '.mysqli_error($conn));
    }

    $sql="UPDATE tbl_chamado SET situacao = 'Concluído', valor='$valor' WHERE ordem_servico = '$ordem_servico'";

    $conn->query("SET NAMES utf8");

    $retval = mysqli_query($conn, $sql);
    
    if(!$retval)
    {
        die('Could not get data: '.mysqli_error($conn));
    }

    if($conn->query($sql)===TRUE)
    {
        print "<script language='javascript' type='text/javascript'>alert('Informações atualizadas com sucesso!');window.location.href='Admin.html'</script>";
    }
    else
    {
        echo "Erro: ".sql."<br>".$conn->error;
    }
    
    mysqli_close($conn);
 
?>