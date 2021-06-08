<?php
    include_once "../classes/Chamado.class.php";

    $chamado = new Chamado();

    $situacao = $_POST['situacao'];
    $ordem = $_POST['ordem_servico'];

    if($chamado->updateOrdem($ordem, $situacao)){
        print "<script language='javascript' type='text/javascript'>alert('Situação atualizada com sucesso!');window.location.href='../views/Admin.html'</script>";
    }