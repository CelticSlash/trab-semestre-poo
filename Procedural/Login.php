<?php
    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $servername = "localhost";
    $database = "chamado_tecnico";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $sql = "SELECT user FROM tbl_admin WHERE user = '$user' AND senha = '$senha'";
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Bem-Vindo.');window.location.href='Admin.html'</script>";
        }
        else
        {
            echo "<script language='javascript' type='text/javascript'>alert('Login inválido.');window.location.href='index.html'</script>";
        }
    }
?>