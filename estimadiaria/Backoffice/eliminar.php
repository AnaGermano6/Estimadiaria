<?php

  $titulo = ( $_GET['titulo'] );

//liga e escolhe a BD 
include("ligarBD.php"); 

// verifica se o cliente indicado existe - se existir apaga, se não existir dá erro
$procura="SELECT * FROM dicas_limpeza WHERE titulo= '$titulo'";
$faz_procura=mysqli_query($ligaBD,$procura);
$num_registos=mysqli_num_rows($faz_procura);
					

//verifica se existem registos
if($num_registos==0){
echo "Não existem dicas com esse titulo. ";
echo '<strong><a href="dicas_limpeza.php">Voltar</a></strong>';
}
else {
$sql = "DELETE FROM dicas_limpeza WHERE titulo= '$titulo'";
$apaga=mysqli_query($ligaBD,$sql);
echo "Dica apagada com sucesso";
echo '<p><strong><a href="dicas_limpeza.php">Voltar</a></strong></p>';
exit;
}
?>     