<?php

//captar dados do formulário
$utilizador=$_POST["utilizador"];
$senha=$_POST["senha"];

//liga a BD
include("ligarBD.php");


//Verifica se o par username/password existem na BD
$existe="SELECT * FROM cliente WHERE utilizador='administrador' AND senha='".$senha."'";
$faz_existe=mysqli_query($ligaBD,$existe);
$num_registos=mysqli_num_rows($faz_existe);
if($num_registos==1){ //se existe...
setcookie("utilizador", "administrador");// guarda o utilizador para verificar se pode estar em cada página
header('Location:a_empresa.php'); 
}
else { //se não existe...
//header('Location:index.php');
echo "Não existe nenhum utilizador com este nome!"; 
}
?>