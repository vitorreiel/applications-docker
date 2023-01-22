<?php

	class Anime{
		private $id;
 		private $id_usuario;
 		private $tipo;
 		private $categoria;
 		private $status;
 		private $avaliacao;
 		private $descricao;
 		private $img;
 		private $nome;
		private $tamanho;

		public function getId(){
			return $this->id;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function getStatus(){
			return $this->status;
		}
		public function getAvaliacao(){
			return $this->avaliacao;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getImg(){
			return $this->img;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getTamanho(){
			return $this->tamanho;
		}

		public function setId($id){
			$this->id=$id;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario=$id_usuario;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function setCategoria($categoria){
			$this->categoria=$categoria;
		}
		public function setStatus($status){
			$this->status=$status;
		}
		public function setAvaliacao($avaliacao){
			$this->avaliacao=$avaliacao;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setImg($img){
			$this->img=$img;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setTamanho($tamanho){
			$this->tamanho=$tamanho;
		}
		
	}
	
?>