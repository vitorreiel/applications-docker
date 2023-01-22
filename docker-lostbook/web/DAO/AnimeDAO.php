<?php

class AnimeDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM animes WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include __DIR__.'/../conexao.php';
		$sql = 'SELECT * FROM animes';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	public function buscar($pesquisa){
		include __DIR__.'/../conexao.php';
		$sql = "SELECT * FROM animes WHERE nome LIKE '%".$pesquisa."%' ORDER BY status,nome ASC";
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	public function buscar_filtros($tipo,$categoria,$status){
		include __DIR__.'/../conexao.php';
		if (empty($tipo) and empty($categoria) and !empty($status)) {
			$sql = "SELECT * FROM animes WHERE status LIKE'%".$status."%' ORDER BY status,nome ASC";
		}else if(empty($tipo) and empty($status) and !empty($categoria) ){
			$sql = "SELECT * FROM animes WHERE categoria ='".$categoria."' ORDER BY status,nome ASC";
		}else if (!empty($tipo) and empty($status) and empty($categoria) ) {
			$sql = "SELECT * FROM animes WHERE tipo ='".$tipo."' ORDER BY status,nome ASC";
		}else if(!empty($tipo) and !empty($status) and empty($categoria)){
			$sql = "SELECT * FROM animes WHERE tipo='".$tipo."' AND status LIKE'%".$status."%' ORDER BY status,nome ASC";
		}else if (!empty($tipo) and empty($status) and !empty($categoria)) {
			$sql = "SELECT * FROM animes WHERE tipo='".$tipo."' AND categoria ='".$categoria."' ORDER BY status,nome ASC";
		}else if (empty($tipo) and !empty($status) and !empty($categoria)) {
			$sql = "SELECT * FROM animes WHERE categoria='".$categoria."' AND status LIKE'%".$status."%' ORDER BY status,nome ASC";
		}else if (!empty($tipo) and !empty($status) and !empty($categoria)) {
			$sql = "SELECT * FROM animes WHERE tipo='".$tipo."' AND status LIKE'%".$status."%' AND categoria ='".$categoria."' ORDER BY status,nome ASC";
		}

		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodosPor(){
		include("conexao.php");
		$sql = "SELECT nome FROM animes WHERE nome LIKE '%".$pesquisa."%' ";
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodosOrgenandoPor(){
		include __DIR__.'/../conexao.php';
		$sql = 'SELECT * FROM animes ORDER BY status,nome ASC';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM animes WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id->getId());
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($anime){
		include("conexao.php");
		$sql = 'INSERT INTO animes (id, id_usuario, tipo, categoria, status, avaliacao, descricao, img, nome, tamanho) VALUES (:id, :id_usuario, :tipo, :categoria, :status, :avaliacao, :descricao, :img, :nome, :tamanho)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$anime->getId()); 
		$consulta->bindValue(':id_usuario',$anime->getId_usuario()); 
		$consulta->bindValue(':tipo',$anime->getTipo()); 
		$consulta->bindValue(':categoria',$anime->getCategoria()); 
		$consulta->bindValue(':status',$anime->getStatus()); 
		$consulta->bindValue(':avaliacao',$anime->getAvaliacao()); 
		$consulta->bindValue(':descricao',$anime->getDescricao()); 
		$consulta->bindValue(':img',$anime->getImg()); 
		$consulta->bindValue(':nome',$anime->getNome()); 
		$consulta->bindValue(':tamanho',$anime->getTamanho()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($anime){
		include("conexao.php");

		if($anime->getImg() == null){
			$sql = 'UPDATE animes SET id = :id, tipo = :tipo, categoria = :categoria, status = :status, avaliacao = :avaliacao, nome = :nome, tamanho = :tamanho WHERE id = :id';
			$consulta = $conexao->prepare($sql);
			$consulta->bindValue(':id',$anime->getId());  
			$consulta->bindValue(':tipo',$anime->getTipo()); 
			$consulta->bindValue(':categoria',$anime->getCategoria()); 
			$consulta->bindValue(':status',$anime->getStatus()); 
			$consulta->bindValue(':avaliacao',$anime->getAvaliacao()); 
			$consulta->bindValue(':nome',$anime->getNome()); 
			$consulta->bindValue(':tamanho',$anime->getTamanho()); 
			if($consulta->execute())
				return true;
			else
				return false;
		}else{
			$sql = 'UPDATE animes SET id = :id, tipo = :tipo, categoria = :categoria, status = :status, avaliacao = :avaliacao, img = :img, nome = :nome, tamanho = :tamanho WHERE id = :id';
			$consulta = $conexao->prepare($sql);
			$consulta->bindValue(':id',$anime->getId());  
			$consulta->bindValue(':tipo',$anime->getTipo()); 
			$consulta->bindValue(':categoria',$anime->getCategoria()); 
			$consulta->bindValue(':status',$anime->getStatus()); 
			$consulta->bindValue(':avaliacao',$anime->getAvaliacao()); 
			$consulta->bindValue(':img',$anime->getImg()); 
			$consulta->bindValue(':nome',$anime->getNome()); 
			$consulta->bindValue(':tamanho',$anime->getTamanho()); 
			if($consulta->execute())
				return true;
			else
				return false;
		}
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM animes';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>