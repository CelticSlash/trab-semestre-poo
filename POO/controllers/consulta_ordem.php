<?php
    include_once "../classes/Chamado.class.php";

    $chamado = new Chamado();

    $ordem_servico = $_POST['ordem_servico'];

    if($chamado->getOrdem($ordem_servico)){
        header('Location: ../views/Ordem_servico.php');
    }