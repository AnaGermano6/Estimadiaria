<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estima Diária - Serviços de Limpeza, Lda.</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 11px;
}
body {
	background-image: url();
	background-repeat: no-repeat;
}
#apDiv1 {
	position:absolute;
	left:67px;
	top:34px;
	width:119px;
	height:75px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:262px;
	top:79px;
	width:247px;
	height:186px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:142px;
	top:49px;
	width:252px;
	height:135px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:91px;
	top:84px;
	width:192px;
	height:89px;
	z-index:1;
}
#apDiv5 {
	position:absolute;
	left:18px;
	top:23px;
	width:226px;
	height:167px;
	z-index:2;
}
#apDiv6 {
	position:absolute;
	left:452px;
	top:297px;
	width:129px;
	height:46px;
	z-index:3;
}
#apDiv7 {
	position:absolute;
	left:817px;
	top:18px;
	width:130px;
	height:24px;
	z-index:3;
}
.style1 {
	font-size: 12px;
	font-weight: bold;
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
.style4 {color: #999999}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<?php include("validar.php") ?>
<table width="100%" height = "100%" border="0" cellspacing="0" cellpadding="0">
  <tr width="100%" height = "100%" align="center" valign="middle">
    <td width="100%" height = "100%" align="center" valign="middle"><table width="900" height="599" border="0" align="center" cellpadding="0" cellspacing="0" background="desenho do site/Fundo.jpg">
      <tr>
        <td height="214" colspan="2" align="center" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','880','height','220','src','Banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','Banner' ); //end AC code
        </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="880" height="220">
            <param name="movie" value="Banner.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <embed src="Banner.swf" width="880" height="220" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
          </object>
          </noscript>          </td>
      </tr>
      <tr>
        <td width="17%" height="321" valign="top"><table width="139" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="135" valign="top">
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','150','height','311','src','Botões_Utilizador','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','Botões_Utilizador' ); //end AC code
</script>
<noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="150" height="311">
  <param name="movie" value="Botões_Utilizador.swf" />
  <param name="quality" value="high" />
  <param name="Wmode" value="transparent" />
  <embed src="Botões_Utilizador.swf" width="150" height="311" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
</object>
</noscript></td>
          </tr>
          <tr>
            <td align="center" valign="top"><?php echo $_COOKIE['utilizador']?>, <a href="sair.php">Sair</a></a></td>
          </tr>
        </table>
          <p>&nbsp;</p></td>
        <td width="83%" valign="top">
          <table width="728" height="345" border="0" align="center" background="desenho do site/Quadrado_de_texto.png">
          <tr>
            <td valign="top">
              <table width="200" border="0">
                <tr>
                  <td height="16"><p class="style1">Ficha de Cliente</p>                    </td>
                </tr>
              </table>
              <form id="form1" name="form1" method="POST" action="alterar_ficha.php">
                  <?php
			
            	//liga e escolhe a BD 
				include("ligarBD.php"); 
				
				//início de acção sobre a BD 
				$procurar="select* from cliente where utilizador='".$_COOKIE['utilizador']."'";
				$faz_procura=mysqli_query($ligaBD,$procurar); 
				$num_registos=mysqli_num_rows($faz_procura);
		 
				?>
                <table border="0" align="left">
					<?php          
					for ($i=0; $i<$num_registos; $i++) {
					$registos=mysqli_fetch_array($faz_procura);
					echo '<tr align="left">';
					echo '<td align="right"><strong>Nome:</td></strong><td align="left">'.$registos['nome'].'</td></tr>';
					echo '<td align="right"><strong>Email:</td></strong><td align="left">'.$registos['email'].'</td></tr>';
					echo '<td align="right"><strong>NIF:</td></strong><td align="left">'.$registos['NIF'].'</td></tr>';
					echo '<td align="right"><strong>Morada:</td></strong><td align="left">'.$registos['morada'].'</td></tr>';
					echo '<td align="right"><strong>Localidade:</td></strong><td align="left">'.$registos['localidade'].'</td></tr>';
					echo '<td align="right"><strong>Contacto:</td></strong><td align="left">'.$registos['contacto'].'</td></tr>';
					echo '<td align="right"><strong>Utilizador:</td></strong><td align="left">'.$registos['utilizador'].'</td></tr>';
					echo '<td align="right"><strong>Senha:</td></strong><td align="left">'.$registos['senha'].'</td></tr>';
					}
					echo '<td></td><td align="left"><input type="submit" name="editar" id="editar" value="Editar" /></td>';
					?>
                    </table>
                   </form>              </tr>
        </table>          </td>
      </tr>
    </table></td>
  </tr>
</table>
<div align="center" class="style7 style4">© 2009 Estima Diária - Serviços de limpeza, Lda. / Elaborado: anasofiagermano@gmail.com
  </p>
  </span>
  </p>
</div>
</body>
</html>
