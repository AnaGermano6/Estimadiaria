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
</style>            	<?php 
			session_start(); 
			if(!isset($_COOKIE["utilizador"])){ 
			echo '<h6 class="style1">Página reservada a utilizadores registados</h6>'; 
			echo '<a href="index.php">Voltar</a>';exit;
			} 
			?>
          