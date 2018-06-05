<?php 

session_start();

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$querynow2 =  "select * from usuario where usuario = '".$login."' and senha = '".$senha."';";

$connect = mysqli_connect('localhost', 'root', '1234','projetoiemac','3306');

$result = mysqli_query($connect,$querynow2);

if(mysqli_num_rows($result) > 0){
	$_SESSION['usuario'] = $login;
	$_SESSION['senha'] = $senha;
	
	echo "
		<script>
			alert('Bem vindo, ".$_SESSION['usuario']."');
			window.location = 'http://localhost/projeto-iemac-final/indexsis.php';
		</script>
	";
	//header("location:indexsis.php");
}else{
	unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);
	
	echo "
		<h4>Ops. Senha errada. Tente novamente.</h4>
		<a href='index.php'>Voltar ao início</a>
	";

	//header('location:index.php');
}

