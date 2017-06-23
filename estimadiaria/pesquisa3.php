<?php
					//captar dados do formulário
					$pesquisa=$_REQUEST["pesquisa"];
					
					//liga e escolhe a BD
					include("ligarBD.php");

					//início de acção sobre a BD
					$procura="SELECT * FROM dicas_limpeza WHERE titulo LIKE '%".$pesquisa."%';";
					$faz_procura=mysqli_query($ligaBD,$procura);
					$num_registos=mysqli_num_rows($faz_procura);
					

					//verifica se existem registos
					if($num_registos==0){
					echo "Não existem registos com esse nome.";
					echo '<a href="dicas_limpeza.html">Voltar</a>';
					exit;
					}
					echo 'Número total de registos encontrados: '.$num_registos;
				      
					?><style type="text/css">
<!--
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
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
-->
</style>
					
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
-->
</style>
                    
                    <table border="0" align="left">
                    <tr><td></td></tr>
                     <tr><td></td></tr>
                    
                                        <?php          
					for ($i=0; $i<$num_registos; $i++) {
					$registos=mysqli_fetch_array($faz_procura);
					echo '<tr align="left">';
					echo '<td align="left"><strong>'.$registos['titulo'].'<strong/></td></tr>';
					echo '<tr align="left"><td align="left">'.$registos['titulo_descricao'].'</td></tr>';
					echo '<tr><td></td></tr>';
					echo '<tr><td></td></tr>';
					echo '<tr><td></td></tr>';
					
					}
					?>
                   
                </table>
              
                <strong><a href='javascript:history.back(1)'>Voltar</a></strong><style type="text/css">
			
