<?php

	class Admin{
		private $id;
 		private $img;
 		private $login;
 		private $senha;
 				
		public function getId(){
			return $this->id;
		}
		public function getImg(){
			return $this->img;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getSenha(){
			return $this->senha;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setImg($img){
			$this->img=$img;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		
	}
	
?>