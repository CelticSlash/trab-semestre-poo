<?php
    include_once "../classes/Chamado.class.php";

    $chamado = new Chamado();

    $chamado->setOrdem($_POST);

    if($chamado->getAllAnalise()){
        header('Location: ../views/Ordem_servico.php');
    }