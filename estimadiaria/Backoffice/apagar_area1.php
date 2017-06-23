<script language="JavaScript">
//Script para confirmação de exclusão
function deleta(){
if(confirm("Tem certeza que deseja apagar?")){
return true;
} else {
return false;
}
}
</script>

<?php
			  
			 	//liga e escolhe a BD 
				include("ligarBD.php"); 
				
				//início de acção sobre a BD 
				$procurar="select * from cliente";
				$faz_procura=mysqli_query($ligaBD, $procurar); 
				$num_registos=mysqli_num_rows($faz_procura);
		 
				?><style type="text/css">
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
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
                          
              
              <table border="0" align="left">
              <tr><td><strong>Utilizador</strong></td></tr>
					<?php          
					for ($i=0; $i<$num_registos; $i++) {
					$registos=mysqli_fetch_array($faz_procura);
					echo '<tr align="left">';
					echo '<td align="left">'.$registos['utilizador'].'</td>';
					echo '<td>';
					echo '<td>';
					echo "<td><a href='eliminar1.php?utilizador={$registos['utilizador']}'Onclick='return deleta();'><img src='../Imagens/apagar.png' width='24' height='24' />Apagar</a></td>";
					echo '</tr>';
					}
					?>
					</table>