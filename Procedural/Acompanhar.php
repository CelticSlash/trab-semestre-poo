<?php
    
    $ordem_servico = $_POST['ordem_servico'];
    
    $servername = "localhost";
    $database = "chamado_tecnico";
    $username = "root";
    $password = "";

    ini_set('default_charset','UTF-8');
    
    $array = array();

    $conn = mysqli_connect($servername, $username, $password, $database);

    $query="SELECT * FROM tbl_chamado WHERE ordem_servico = '$ordem_servico'";

    $conn->query("SET NAMES utf8");


    if($detalhes = mysqli_query($conn, $query)){
        
        if(mysqli_num_rows($detalhes) > 0){
                
            while ($row = mysqli_fetch_array($detalhes)){
                
                $array["razao_social"] = $row["razao_social"];
                $array["nome_responsavel"] = $row["nome_responsavel"];
                $array["endereco"] = $row["endereco"];
                $array["cidade"] = $row["cidade"];
                $array["estado"] = $row["estado"];
                $array["data_abertura"] = $row["data_abertura"];
                $array["situacao"] = $row["situacao"];
                $array["equipamento"] = $row["equipamento"];
                $array["garantia"] = $row["garantia"];
                $array["patrimonio"] = $row["patrimonio"];
                $array["marca"] = $row["marca"];
                $array["modelo"] = $row["modelo"];
                $array["descricao"] = $row["descricao"];
                $array["valor"] = $row["valor"];
            }
            $array["data_abertura"] = implode("/", array_reverse(explode("-", $array ['data_abertura'])));
        }
    }    
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>

		<!-- Tags Obrigatórias -->
		<link rel="shortcut icon" href="Imagens/Logo2.png"/><title>Acompanhamento - Boss Solutions</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>

	<body>		
		<link rel="stylesheet" type="text/css" href="estilo.css">
		
		<!-- Menu do site-->
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A7A7A7">
				<a class="navbar-brand" href="index.html">
					<img src="Imagens/Logo.png" width="200" height="100" alt="Logotipo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="true" aria-label="Alterna navegação">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="textoNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="Contratar.php">Contratar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Consultar.html">Acompanhamento</a>
						</li>
					</ul>
				</div>
			</nav>	
		</div>
		
        <br>
		<div class="container">
			<div class="contato">
				<form action="Cadastrar.php" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputRazao">Razão Social</label>
							<input id="inputRazao" name="razao_social" type="text" class="form-control" readonly value="<?php echo $array['razao_social']?>">
						</div>

						<div class="form-group col-md-6">
							<label for="inputNome">Nome do Responsável</label>
                            <input id="inputNome" name="nome_responsavel" type="text" class="form-control" readonly value="<?php echo $array['nome_responsavel']?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEndereco">Endereço</label>
						<input id="inputEndereco" name="endereco" type="text" class="form-control" readonly value="<?php echo $array['endereco']?>">
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCidade">Cidade</label>
							<input id="inputCidade" name="cidade" type="text" class="form-control" readonly value="<?php echo $array['cidade']?>">
						</div>

						<div class="form-group col-md-4">
							<label for="inputEstado">Estado</label>
							<input id="inputEstado" name="estado" type="text" class="form-control" readonly value="<?php echo $array['estado']?>">
						</div>

						<div class="form-group col-md-2">
							<label for="inputChamado">Abertura do Chamado</label>
							<input id="inputChamado" name="data_abertura" type="text" class="form-control" readonly value="<?php echo $array['data_abertura']?>">
						</div>
						
						<div class="form-group col-md-3">
						    <label for="inputSituacao">Situação</label>
						    <input id="inputSituacao" name="situacao" type="text" class="form-control" readonly value="<?php echo $array['situacao']?>">
						</div>
						
						<div class="form-group col-md-3">
						    <label for="inputEquipamento">Tipo de Equipamento</label>
						    <input id="inputEquipamento" name="equipamento" type="text" class="form-control" readonly value="<?php echo $array['equipamento']?>">
						</div>
						
						<div class="form-group col-md-3">
						    <label for="inputGarantia">Equipamento em Garantia</label>
						    <input id="inputGarantia" name="garantia" type="text" class="form-control" readonly value="<?php echo $array['garantia']?>"> 
						</div>
                        
                        <div class="form-group col-md-3">
						    <label for="inputValor">Valor a Pagar</label>
						    <input id="inputValor" name="valor" type="text" class="form-control" readonly value="<?php echo $array['valor']?>"> 
						</div>
						
						<div class="form-group col-md-4">
						    <label for="inputPatrimonio">Nº de Patrimônio</label>
						    <input id="inputPatrimonio" name="patrimonio" type="text" class="form-control" readonly value="<?php echo $array['patrimonio']?>">
						</div>
						
						<div class="form-group col-md-3">
						    <label for="inputMarca">Marca do Equipamento</label>
						    <input id="inputMarca" name="marca" type="text" class="form-control" readonly value="<?php echo $array['marca']?>">
						</div>
						
						<div class="form-group col-md-5">
						    <label for="inputModelo">Modelo do Equipamento</label>
						    <input id="inputModelo" name="modelo" type="text" class="form-control" readonly value="<?php echo $array['modelo']?>"> 
						</div>
						
				    </div>
						
                    <div class="form-row">
                        <label for="inputMensagem">Descrição do Problema</label>
                        <input id="inputMensagem" name="descricao" type="text" class="form-control" readonly value="<?php echo $array['descricao']?>">
                    </div>
				</form>
			</div>
		</div>
		<br>

		<!-- Rodapé -->
		<footer class="footer">
			<div class="container">
				© 2019 Copyright: Boss Solutions | contato@boss.com.br | Fone: (11)5562-4859
			</div>
		</footer>

		<!-- JavaScript para agilizar carregamento do código -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>