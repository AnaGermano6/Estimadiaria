<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
-->
</style>	<?php

  $utilizador = ( $_GET['utilizador'] );

//liga e escolhe a BD 
include("ligarBD.php"); 

// verifica se o cliente indicado existe - se existir apaga, se não existir dá erro
$procura="SELECT * FROM cliente WHERE utilizador= '$utilizador'";
$faz_procura=mysqli_query($ligaBD,$procura);
$num_registos=mysqli_num_rows($faz_procura);
					

//verifica se existem registos
if($num_registos==0){
echo "Não existem utilizadores com esse nome. ";
echo '<strong><a href="area_reservada.php">Voltar</a></strong>';
}
else {
$sql = "DELETE FROM cliente WHERE utilizador= '$utilizador'";
$apaga=mysqli_query($ligaBD,$sql);
echo "Utilizador apagado com sucesso";
exit;
}
?>          