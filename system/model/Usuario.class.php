<?php 

	class Usuario
	{
		private $idusuario;
		private $usuario;
		private $senha;

		function getIdusuario() 
		{
        	return $this->idusuario;
    	}

    	function getUsuario() 
		{
        	return $this->usuario;
    	}

    	function getSenha() 
		{
        	return $this->senha;
    	}

    	function setIdusuario($idusuario)
    	{
        	$this->idusuario = $idusuario;
    	}

    	function setUsuario($usuario)
    	{
        	$this->usuario = $usuario;
    	}

    	function setSenha($senha)
    	{
        	$this->senha = $senha;
    	}
	}

 ?>