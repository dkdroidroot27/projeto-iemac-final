<?php 

	class UsuarioDAO
	{
		
		public function load(Usuario $usuario)
		{
			global $connection;

			if($usuario->getIdusuario() == null)
			{
				$sql = $connection->query("select * from usuario where idusuario is not null");
				return $sql;
			}
			else
			{
				$sql = $connection->query("select * from usuario where idusuario = ".$usuario->getIdusuario().";");
				$resultset = $sql->fetch_array();
				$usuario->setIdusuario($resultset['idusuario']);
				$usuario->setUsuario($resultset['usuario']);
				$usuario->setSenha($resultset['senha']);
			}
			return null;
		}
	}

 ?>