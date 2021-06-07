<?php
    include_once "../classes/Chamado.class.php";

    $chamado = new Chamado();

    $chamado->setOrdem($_POST);

    if($chamado->insert()){
        header('Location: ../views/Ordem_servico.php');
    }