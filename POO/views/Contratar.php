<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">       
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

		<!-- Tags Obrigatórias -->
		<link rel="shortcut icon" href="../Imagens/Logo2.png"/><title>Contratar Serviços - Boss Solutions</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>

	<body>		
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		
		<!-- Menu do site-->
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A7A7A7">
				<a class="navbar-brand" href="index.html">
					<img src="../Imagens/Logo.png" width="200" height="100" alt="Logotipo">
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
		
		<!-- Formulário de contato -->
		<br>
		<div class="texto">
			<p>Preencha o formulário abaixo para contratar nossos serviços</p>
		</div>
		<br>
		<div class="container">
			<div class="contato">
				<form action="../controllers/create_ordem.php" method="POST">
					<div class="row">
						<div class="form-group col-md-6">
							<label class="pt-2" for="inputRazao">Razão Social</label>
							<input id="inputRazao" name="razao_social" type="text" class="form-control" maxlength="60">
						</div>

						<div class="form-group col-md-6">
							<label class="pt-2" for="inputNome">Nome do Responsável</label>
							<input id="inputNome" name="nome_responsavel" type="text" class="form-control" maxlength="40">
						</div>
					</div>

					<div class="form-group">
						<label class="pt-2" for="inputEndereco">Endereço</label>
						<input id="inputEndereco" name="endereco" type="text" class="form-control" maxlength="60">
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label class="pt-2" for="inputCidade">Cidade</label>
							<input id="inputCidade" name="cidade" type="text" class="form-control" maxlength="30">
						</div>

						<div class="form-group col-md-4">
							<label class="pt-2" for="inputEstado">Estado</label>
							<input id="inputEstado" name="estado" type="text" class="form-control" maxlength="2">
						</div>

						<div class="form-group col-md-2">
							<label class="pt-2" for="inputChamado">Abertura do Chamado</label>
							<input id="inputChamado" name="data_abertura" type="text" class="form-control" readonly value="<?php echo date('d/m/Y');?>">
						</div>
						
						<div class="form-group col-md-9">
						    <label class="pt-2" for="inputEquipamento">Tipo de Equipamento</label>
						    <input id="inputEquipamento" name="equipamento" type="text" class="form-control" maxlength="50">
						</div>
						
						<div class="form-group col-md-3">
						    <label class="pt-2" for="inputGarantia">Equipamento em Garantia:</label>
							<div class="container form-control">
								<input type="radio" name="garantia" value="Sim">Sim
								<input type="radio" name="garantia" value="Não">Não 
							</div>
						</div>
						
						<div class="form-group col-md-4">
						    <label class="pt-2" for="inputPatrimonio">Nº de Patrimônio</label>
						    <input id="inputPatrionio" name="patrimonio" type="text" class="form-control" maxlength="15">
						</div>
						
						<div class="form-group col-md-3">
						    <label class="pt-2" for="inputMarca">Marca do Equipamento</label>
						    <input id="inputMarca" name="marca" type="text" class="form-control" maxlength="30">
						</div>
						
						<div class="form-group col-md-5">
						    <label class="pt-2" for="inputModelo">Modelo do Equipamento</label>
						    <input id="inputModelo" name="modelo" type="text" class="form-control" maxlength="30">
						</div>
						
						<div class="form-group pb-2">
							<label class="pt-2" for="inputMensagem">Descrição do Problema</label>
							<textarea id="inputMensagem" name="descricao" class="form-control" placeholder="Digite sua mensagem..." cols="200" maxlength="300"></textarea>
						</div>
					</div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
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