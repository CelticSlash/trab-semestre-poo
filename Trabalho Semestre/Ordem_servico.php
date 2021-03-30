<?php
    $servername = "localhost";
    $database = "chamado_tecnico";
    $username = "root";
    $password = "";
    
    $array = array();

    $conn = mysqli_connect($servername, $username, $password, $database);

    $query="SELECT ordem_servico FROM tbl_chamado ORDER BY ordem_servico DESC LIMIT 1";


    if($detalhes = mysqli_query($conn, $query)){
        
        if(mysqli_num_rows($detalhes) > 0){
                
            while ($row = mysqli_fetch_array($detalhes)){
                
               $array["ordem_servico"] = $row["ordem_servico"];
            }      
        }
    }    
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>

		<!-- Tags Obrigatórias -->		
		<link rel="shortcut icon" href="Imagens/Logo2.png"/><title>Boss Solutions</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>

	<body>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		
		<!-- Menu do site-->
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A7A7A7">
				<a class="navbar-brand">
					<img src="Imagens/Logo.png" width="200" height="100" alt="Logotipo">
				</a>
			</nav>	
		</div>
		
		<!-- Exibição da Ordem de Serviço -->
		<div class="container">
            <div class="texto">
                <h1>Contrato efetuado com sucesso!</h1><br>
                <p>O número da Ordem de Serviço é:</p>
                <center>
                <div class="form-group col-md-2">
                    <?php 
                        echo "<input id='inputOrdem' name='ordem_servico' type='text' class='form-control' readonly value=".$array['ordem_servico'].">";
                    ?>
                    <br>
                    <form action="index.html">
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
                </center>
                <h5>Guarde este número para eventuais consultas</h5>
                <br>
                <p>Agradecemos a preferência!</p>
            </div>
        </div>

		
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