<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	margin-left: 15px;
	margin-top: 15px;
	margin-right: 15px;
	margin-bottom: 15px;
}
-->
</style></head>

<body>
 <?php
//liga e escolhe a BD
include("ligarBD.php");

//início de acção sobre a BD
$procura="SELECT * FROM dicas_limpeza;";
$faz_procura=mysqli_query($ligaBD,$procura);
$num_registos=mysqli_num_rows($faz_procura);
?>
                    
<table border="0" align="left">
					
<?php          
for ($i=0; $i<$num_registos; $i++) {
$registos=mysqli_fetch_array($faz_procura);
echo '<tr align="left">';
echo '<td align="left"><strong>'.$registos['titulo'].'<strong/></td></tr>';
echo '<tr align="left"><td>'.$registos['titulo_descricao'].'</td></tr>';
echo '<tr><td></td></tr>';
echo '<tr><td></td></tr>';
echo '<tr><td></td></tr>';
echo '<tr><td></td></tr>';
}
?>
</body>
</html>