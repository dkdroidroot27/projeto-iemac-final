<?php 

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['senha']);

session_destroy();

echo "
	<script>
         alert('Usuário desconectado com sucesso!');
         window.location = 'http://localhost/projeto-iemac-final/index.php';
	</script>

"
//header('location:index.php');

?>