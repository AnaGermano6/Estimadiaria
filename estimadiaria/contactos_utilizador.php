<?php require_once('../Connections/bd.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_bd, $bd);
$query_Recordset1 = "SELECT * FROM site";
$Recordset1 = mysql_query($query_Recordset1, $bd) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.style5 {font-size: 9px}
.style6 {
	font-size: 12px;
	font-weight: bold;
}
.style7 {font-size: 12px}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
a:link {
	text-decoration: none;
	color: #000000;
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
.style8 {
	font-size: 11px;
	color: #666666;
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
        <td height="214" colspan="2"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','880','height','220','src','Banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','Banner' ); //end AC code
        </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="880" height="220">
            <param name="movie" value="Banner.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <embed src="Banner.swf" width="880" height="220" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
          </object>
          </noscript>
          </td>
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
</noscript>
</td>
          </tr>
          <tr>
            <td align="center" valign="top"><?php echo $_COOKIE['utilizador']?>, <a href="sair.php">Sair</a></td>
          </tr>
        </table>
          <p>&nbsp;</p></td>
        <td width="83%" valign="top"><table width="97%" border="0" align="left" cellpadding="0" cellspacing="0" background="desenho do site/Quadrado_de_texto.png">
          <tr>
            <td width="42%" height="339" align="left" valign="top"><table width="200" border="0">
              <tr>
                <td><span class="style6">Contactos</span></td>
              </tr>
              <tr>
                <td><span class="style6"></span><span class="style7"><?php echo $row_Recordset1['contactos']; ?></span></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <td width="58%" valign="top"><iframe width="410" height="330" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-br&amp;geocode=&amp;q=Av.+Fern%C3%A3o+Magalh%C3%A3es+1123+porto&amp;aq=&amp;sll=41.159238,-8.592253&amp;sspn=0.007464,0.013797&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+de+Fern%C3%A3o+Magalh%C3%A3es+1123,+Campanh%C3%A3,+4000+Porto,+Portugal&amp;ll=41.159271,-8.592296&amp;spn=0.007399,0.013797&amp;z=14&amp;output=embed"></iframe>
                <span class="style5">&nbsp;</span></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<div align="center" class="style8"><span class="style4">© 2009 Estima Diária - Serviços de limpeza, Lda. / Elaborado: anasofiagermano@gmail.com</span>
  </p>
  </span>
  </p>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
