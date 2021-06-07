<?php
    include_once "../classes/Chamado.class.php";

    $chamado = new Chamado();

    $situacao = $_POST['situacao'];

    if($chamado->updateOrdem($situacao)){
        print "<script language='javascript' type='text/javascript'>alert('Situação atualizada com sucesso!');window.location.href='../views/Admin.html'</script>";
    }