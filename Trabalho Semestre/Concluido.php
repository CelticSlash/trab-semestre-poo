<?php
    $servername = "localhost";
    $database = "chamado_tecnico";
    $username = "root";
    $password = "";

    ini_set('default_charset','UTF-8');

    $conn = mysqli_connect($servername, $username, $password, $database);

    $query="SELECT * FROM tbl_chamado WHERE situacao = 'Concluído'";

    $conn->query("SET NAMES utf8");

    if($detalhes = mysqli_query($conn, $query)){
        
        if(mysqli_num_rows($detalhes) > 0){
                
            while ($row = mysqli_fetch_array($detalhes)){
                
                echo "Ordem de Serviço: "       .$row["ordem_servico"].       "<br>
                      Situação: "               .$row["situacao"].            "<br>
                      Valor: "                  .$row["valor"].               "<br>
                      Razão Social: "           .$row["razao_social"].        "<br>
                      Nome do Responsável: "    .$row["nome_responsavel"].    "<br>
                      Endereço: "               .$row["endereco"].            "<br>
                      Cidade: "                 .$row["cidade"].              "<br>
                      Estado: "                 .$row["estado"].              "<br>
                      Data de Abertura: "       .$row["data_abertura"].       "<br>                
                      Equipamento: "            .$row["equipamento"].         "<br>
                      Garantia: "               .$row["garantia"].            "<br>
                      Nº de Patrimônio: "       .$row["patrimonio"].          "<br>
                      Marca: "                  .$row["marca"].               "<br>
                      Modelo: "                 .$row["modelo"].              "<br>
                      Descrição: "              .$row["descricao"].           "<br>
                      ---------------------------------------------------------<br>";
            }      
        }
    }    
?>