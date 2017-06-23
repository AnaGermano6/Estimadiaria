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
.style4 {color: #666666}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
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
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<?php include("validar.php") ?>
<table width="100%" height = "100%" border="0" cellspacing="0" cellpadding="0">
  <tr width="100%" height = "100%" align="center" valign="middle">
    <td width="100%" height = "100%" align="center" valign="middle"><table width="900" height="599" border="0" align="center" cellpadding="0" cellspacing="0" background="desenho do site/Fundo.jpg">
      <tr>
        <td height="214" colspan="2"><div align="center">
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','880','height','220','src','Banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','Banner' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="880" height="220">
            <param name="movie" value="Banner.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <embed src="Banner.swf" width="880" height="220" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
          </object>
        </noscript></div></td>
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
                </noscript>                </td>
          </tr>
          <tr>
            <td align="center" valign="top"><div align="center"><?php echo $_COOKIE['utilizador']?>, <a href="sair.php">Sair</a></a></div></td>
          </tr>
        </table>
          <p>&nbsp;</p></td>
        <td width="83%" valign="top">
          <table width="728" height="345" border="0" align="center" background="desenho do site/Quadrado_de_texto.png">
          <tr>
            <td valign="top">
            
            <?php
            //liga e escolhe a BD 
				include("ligarBD.php"); 
				
				//início de acção sobre a BD 
				$procurar="select* from cliente where utilizador='".$_COOKIE['utilizador']."'";
				$faz_procura=mysqli_query($ligaBD,$procurar); 
				$linha = mysqli_fetch_assoc($faz_procura);
		 ?>              
            <form id="form1" name="form1" method="post" action="guardar.php">
             
              <p>
                <label></label>
              </p>
              <table width="691" border="0">
                <tr>
                  <td width="333"><table width="330" height="161" border="0">
                    <tr>
                      <td colspan="2" align="center" valign="middle"><label><strong>Dados pessoais </strong></label></td>
                      </tr>
                    <tr>
                      <td width="127" align="right" valign="middle"><strong>Nome: </strong></td>
                      <td width="193" align="left"><label>
                        <input type="text" name="nome" id="nome" value="<?php echo $linha['nome']; ?>"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle"><strong>
                        Email:
                          <label></label>
                      </strong></td>
                      <td align="left"><label>
                        <input name="email" type="text" id="email" value="<?php echo $linha['email']; ?>" size="32"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle"><strong>
                        <label>NIF:</label>
                      </strong></td>
                      <td align="left"><label>
                        <input name="NIF" type="text" id="NIF" value="<?php echo $linha['NIF']; ?>" size="20" maxlength="9" />
                      </label></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle"><strong>Morada:
                          <label></label>
                      </strong></td>
                      <td align="left"><label>
                        <input name="morada" type="text" id="morada" value="<?php echo $linha['morada']; ?>" size="35"/>
                      </label></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle"><strong>Localidade:</strong></td>
                      <td align="left"><input type="text" name="localidade" id="localidade" value="<?php echo $linha['localidade']; ?>"/></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle"><strong>Contacto:</strong></td>
                      <td align="left"><label>
                        <input name="contacto" type="text" id="contacto" value="<?php echo $linha['contacto']; ?>" size="20" maxlength="9"/>
                      </label></td>
                    </tr>
                    
                  </table></td>
                  <td width="348" valign="top"><table width="293" border="0">
                    <tr>
                      <td colspan="2" align="center"><strong>Dados de acesso</strong></td>
                      </tr>
                    <tr>
                      <td width="114" align="right"><strong>Utilizador:</strong></td>
                      <td width="169" align="left"><input type="text" disabled="disabled" value="<?php echo $linha['utilizador']; ?>"/></td>
                    </tr>
                    <tr>
                      <td height="24" align="right"><strong>Alterar senha:</strong></td>
                      <td align="left"><input name="senha" type="password" id="senha" value="<?php echo $linha['senha']; ?>" maxlength="10"/></td>
                    </tr>
                    <tr>
                      <td height="24" align="right"><strong>Repita a senha:</strong></td>
                      <td align="left"><input name="senha1" type="password" id="senha1" value="<?php echo $linha['senha']; ?>" maxlength="10" /></td>
                    </tr>
                    <tr>
                      <td height="24" align="right">&nbsp;</td>
                      <td align="left"><input type="hidden" name="utilizador" id="utilizador" value="<?php echo $linha['utilizador']; ?>"/></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="guardar" id="guardar" value="Guardar" /></td>
                  </tr>
              </table>
            </form>      </td>
          </tr>
        </table>          </td>
      </tr>
    </table></td>
  </tr>
</table>
<div align="center" class="style4">© 2009 Estima Diária - Serviços de limpeza, Lda. / Elaborado: anasofiagermano@gmail.com
  </p>
  </span>
  </p>
</div>
</body>
</html>
