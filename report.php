<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Relatório de Usuários | Projeto IEMAC</title>
	<style type="text/css" media="screen">
	body{
		margin-top: 15px;
	}
	.jumbotron{
		background-color: #ddd;
	}
</style>
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
			<h1>Relatório de Pessoas</h1>
			<p align="justify"></p>
		</div>
		
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
				<p><h4 align="center">Clique no botão abaixo para gerar o relatório. O relatório será gerado utilizando a biblioteca PHP dompdf, disponibilizada gratuitamente.</h4></p>
				<br><br>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<p align="center">
					<a class="btn btn-default btn-success btn-lg" href="reports/activepeople.php" target="_blank">Gerar Relatório de Ativos</a> &nbsp;&nbsp;&nbsp;
					<a class="btn btn-default btn-primary btn-lg" href="reports/inactivepeople.php" target="_blank">Gerar Relatório de Inativos</a>
				</p>
			</div>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>