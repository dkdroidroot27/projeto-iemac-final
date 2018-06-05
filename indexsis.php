<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Início Usuário | Projeto IEMAC</title>
	<style type="text/css" media="screen">
	body{
		margin-top: 15px;
	}
	.jumbotron{
		background-color: #ddd
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
			<h1>Seção de Usuário</h1>
			<p align="justify">Seção de usuário do sistema. Após o controle de sessão validar as informações de login, ele redireciona o usuário a esta página e mantém aberto a sessão por meio da  <code>session_start();</code></p>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			<div class="thumbnail">
				<img data-src="#" alt="">
				<div class="caption">
					<h3>Thumbnail 1</h3>
					<p align="justify">
						Integer bibendum congue nunc, sit amet iaculis mauris rhoncus a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus suscipit aliquam sem id varius. Curabitur vestibulum porta ante, quis consectetur massa vulputate in. Suspendisse facilisis ex a massa accumsan molestie. 
					</p>
					<p>
						<a href="#" class="btn btn-primary">Botão 1</a>
						<a href="#" class="btn btn-default">Botão 2</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			<div class="thumbnail">
				<img data-src="#" alt="">
				<div class="caption">
					<h3>Thumbnail 2</h3>
					<p align="justify">
						Integer bibendum congue nunc, sit amet iaculis mauris rhoncus a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus suscipit aliquam sem id varius. Curabitur vestibulum porta ante, quis consectetur massa vulputate in. Suspendisse facilisis ex a massa accumsan molestie. 
					</p>
					<p>
						<a href="#" class="btn btn-primary">Botão 1</a>
						<a href="#" class="btn btn-default">Botão 2</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			<div class="thumbnail">
				<img data-src="#" alt="">
				<div class="caption">
					<h3>Thumbnail 3</h3>
					<p align="justify">
						Integer bibendum congue nunc, sit amet iaculis mauris rhoncus a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus suscipit aliquam sem id varius. Curabitur vestibulum porta ante, quis consectetur massa vulputate in. Suspendisse facilisis ex a massa accumsan molestie. 
					</p>
					<p>
						<a href="#" class="btn btn-primary">Botão 1</a>
						<a href="#" class="btn btn-default">Botão 2</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			<div class="thumbnail">
				<img data-src="#" alt="">
				<div class="caption">
					<h3>Thumbnail 4</h3>
					<p align="justify">
						Integer bibendum congue nunc, sit amet iaculis mauris rhoncus a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus suscipit aliquam sem id varius. Curabitur vestibulum porta ante, quis consectetur massa vulputate in. Suspendisse facilisis ex a massa accumsan molestie.
					</p>
					<p>
						<a href="#" class="btn btn-primary">Botão 1</a>
						<a href="#" class="btn btn-default">Botão 2</a>
					</p>
				</div>
			</div>
		</div>

	</div>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>