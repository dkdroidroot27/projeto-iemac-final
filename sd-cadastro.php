<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Cadastro de Pessoas | Projeto IEMAC</title>
	<style type="text/css" media="screen">
	body{
		margin-top: 15px;
	}
	.jumbotron{
		background-color: #ddd
	}
</style>
<?php
include_once("system/controller/PessoaController.php");
?>
<?php
$pessoa = new PessoaController();
$pessoa->filterInsert($pessoa);
?>
</head>
<body>

	<?php 
	session_start();
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:index.php');
	}
	?>
	
	<div class="container-fluid">

		<?php include("minifier/navbar-main.php");?>

		<div class="jumbotron">
			<h1>Cadastro de Pessoas</h1>
			<p align="justify">Campos com * são de preenchimento obrigatório. Uma forma de validação de preenchimentos nos campos é feita com HTML5, por meio da instrução <code>required</code> na tag <code>< input ></code></p>
		</div>

		<div class="container">
			<form action="?new" method="POST" role="form">
				<legend>Cadastro Simples</legend>
				<div class="row">
					<div class="col-md-8 col-sm-7 col-xs-12">
						<label for="nome">Nome *</label>
						<input type="text" class="form-control" name="nome" placeholder="Nome da Pessoa" required>
					</div>
					<div class="col-md-4 col-sm-5 col-xs-12">
						<label for="endereco">Endereço *</label>
						<input type="text" class="form-control" name="endereco" placeholder="Endereço completo" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-7 col-xs-12">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" name="email" placeholder="E-mail do usuário">
					</div>
					<div class="col-md-6 col-sm-5 col-xs-12">
						<label for="telefonecontato">Telefone para Contato *</label>
						<input type="text" class="form-control" name="telefone" placeholder="(99)99999-9999">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label for="email">Pai *</label>
						<input type="text" class="form-control" name="pai" placeholder="Nome completo" required>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label for="telefonecontato">Mãe *</label>
						<input type="text" class="form-control" name="mae" placeholder="Nome completo" required>
					</div>
				</div>
				<br><br>
				<p align="center"><button type="submit" class="btn btn-primary">Enviar Informações</button></p>
			</form>
		</div>

	</div>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>