<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Início | Projeto IEMAC</title>
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
	<div class="container-fluid">
		
		<?php include("minifier/navbar.php");?>
		
		<!-- Jumbotron para apresentação -->
		<div class="jumbotron">
			<h1>Sistema de Aprendizado IEMAC</h1>
			<p align="justify">Este é um sistema que poderá ser utilizado como base para sistemas maiores ainda, baseados em PHP Orientado a Objetos e Padrões de Projeto MVC e DAO (Data Access Objects). Os estilos Bootstrap podem ser alterados por uma simples tag <code>< style ></code> na página a ser alterada ou um arquivo CSS a ser adicionado na pasta do projeto. Cuidado para não conflitar com as classes CSS do Bootstrap! </p>
			<button class="btn btn-default btn-success btn-lg">Saiba mais</button>	
		</div>
		
		<!-- Modal do Login -->
		<div class="modal fade" id="loginSistemas" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></button>
						<h2 class="modal-title">Área Administrativa</h2>
						<p align="justify">Informe os dados para acesso ao sistema. Em caso de perda da senha, informe o administrador do sistema para reinclusão.</p>
					</div>
					<div class="modal-body">
						<form action="auth.php" method="POST" role="form" class="form-group">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="">Login</label>
										<input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="">Senha</label>
										<input type="password" class="form-control" name="senha" placeholder="Senha" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="">
											Lembrar-me
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<button type="submit" class="btn btn-primary">Acessar</button>	
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Thumbnails para detalhamento abaixo da página (opcional) -->
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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