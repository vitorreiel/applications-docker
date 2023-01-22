<?php

class UsuarioDAO{

	public function carregar($log){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario WHERE login = :login AND senha = :senha';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':login',$log->getLogin());
		$consulta->bindValue(':senha',$log->getSenha());
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM usuario WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($usuario){
		include("conexao.php");
		$sql = 'INSERT INTO usuario (id, img, login, senha) VALUES (:id, :img, :login, :senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$usuario->getId()); 
		$consulta->bindValue(':img',$usuario->getImg()); 
		$consulta->bindValue(':login',$usuario->getLogin()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($usuario){
		include("conexao.php");
		$sql = 'UPDATE usuario SET id = :id, img = :img, login = :login, senha = :senha WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$usuario->getId()); 
		$consulta->bindValue(':img',$usuario->getImg()); 
		$consulta->bindValue(':login',$usuario->getLogin()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM usuario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>