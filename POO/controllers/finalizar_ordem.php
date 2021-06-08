<?php
    include_once "../classes/Chamado.class.php";

    $chamado = new Chamado();

    $ordem = $_POST['ordem_servico'];
    $valor = $_POST['valor'];

    if($chamado->updateOrdem($ordem, $valor)){
        print "<script language='javascript' type='text/javascript'>alert('Chamado concluído!');window.location.href='../views/Admin.html'</script>";
    }