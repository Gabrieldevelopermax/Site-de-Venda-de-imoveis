<?php

require_once"conexao.php";
    
$login=$_POST['login'];
$senha=$_POST['senha'];   
    
$u=new Login();
$u->logar($login,$senha);






?>