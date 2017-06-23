<?php
$ligaBD=mysqli_connect('localhost','root');
If(!$ligaBD) {
echo "Erro. Não foi possível estabelecer ligação com o MySQL"; exit;
}
$escolheBD=mysqli_select_db($ligaBD,"estimadiaria");
If(!$escolheBD) {
echo "Erro ao escolher a BD"; exit;
}
?>