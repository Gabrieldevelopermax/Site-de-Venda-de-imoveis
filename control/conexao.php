<?php

class Login {
 	
	public function __construct(){
		$this->conn= new PDO("mysql:host=localhost;dbname=id11759541_treinojob","id11759541_gabriel","123654");

	}
	public function logar($login,$senha){
		
		
		$stmt=$this->conn->prepare("SELECT * FROM usuario");
		$stmt->execute();
       // $verificador=false;
        
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			if ($result['login']===md5($login) && $result['senha']===md5($senha)) { 
                header("location:../view\menu\menu.html"); 
                die('Não ignore meu cabeçalho se deu certo...');
			}else {
				header("location:../view\login\invalido.php"); 
				die('Não ignore meu cabeçalho se deu errado...');
			}					
		}	
	 }

	 public function cadastro($nome,$login,$senha){
		
		
		$stmt=$this->conn->prepare("SELECT * FROM usuario");
		$stmt->execute();
        
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			if ($result['login'] == $login ) { 
				header("location:cadastrarErro.html"); die('Não ignore meu cabeçalho...');
				echo "churupita";	
			}else {
				echo"Nada foi encontrado besta ";
			}
				
		}
		
	 }
  		
	}
 ?>