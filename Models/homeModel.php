<?php

	class homeModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function insertUser($name,$old)
		{
			$query_insert = "INSERT INTO usuario (nombre,edad) VALUES (?,?)";
			$arregloConsulta = array($name,$old);
			$request_insert = $this->insert($query_insert,$arregloConsulta);
			return $request_insert;
		}

		public function select_user($id)
		{
			$query_insert = "SELECT * FROM usuario WHERE id=$id";
			$request_insert = $this->select($query_insert);
			return $request_insert;
		}

		public function select_all_users()
		{
			$query_insert = "SELECT * FROM usuario";
			$request_insert = $this->select_all($query_insert);
			return $request_insert;
		}

		public function updateUser(int $id, string $nombre,int $edad)
		{
			//UPDATE `usuario` SET `nombre` = 'Richard Andres' WHERE `usuario`.`id` = 3;
			$sql = "UPDATE usuario SET nombre=?, edad= ? WHERE id = $id";
			$arrData = array($nombre,$edad);
			$request_insert = $this->update($sql,$arrData);
			return $request_insert;
		}

		public function deleteUser(int $id)
		{
			//UPDATE `usuario` SET `nombre` = 'Richard Andres' WHERE `usuario`.`id` = 3;
			$sql = "DELETE FROM usuario WHERE id = $id";
			$request_insert = $this->delete($sql);
			return $request_insert;
		}

	}
 ?>