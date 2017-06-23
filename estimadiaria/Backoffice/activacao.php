<?php require_once('../../Connections/bd.php'); ?>
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

$currentPage = $_SERVER["PHP_SELF"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE cliente SET utilizador=%s, activacao=%s WHERE NIF=%s",
                       GetSQLValueString($_POST['utilizador'], "text"),
                       GetSQLValueString($_POST['activacao'], "int"),
                       GetSQLValueString($_POST['NIF'], "int"));

  mysql_select_db($database_bd, $bd);
  $Result1 = mysql_query($updateSQL, $bd) or die(mysql_error());
}

$maxRows_Recordset1 = 1;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_bd, $bd);
$query_Recordset1 = "SELECT * FROM cliente";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $bd) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
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
.style1 {
	font-size: 12px;
	font-weight: bold;
}
.style5 {color: #999999}
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
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>


<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">

function get_check_value(form){
	If (form.activacaoch.checked)
	{
	form.activacao.value='1';
	}
	else
	{
	form.activacao.value='0';
	}
}

	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
</head>

<body>
<?php include("validar.php") ?>
<table width="100%" height = "100%" border="0" cellspacing="0" cellpadding="0">
  <tr width="100%" height = "100%" align="center" valign="middle">
    <td width="100%" height = "100%" align="center" valign="middle"><table width="900" height="599" border="0" align="center" cellpadding="0" cellspacing="0" background="../desenho do site/Fundo_backoffice.jpg">
      <tr>
        <td height="214" colspan="2" align="left" valign="middle"><script type="text/javascript">
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
            <td width="135" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','150','height','275','src','Botões','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','Botões' ); //end AC code
              </script>
              <noscript>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="150" height="275">
                <param name="movie" value="Botões.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <embed src="Botões.swf" width="150" height="275" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
              </object>
              </noscript></td>
          </tr>
          <tr>
            <td align="center" valign="top"><?php echo $_COOKIE['utilizador']?>, <a href="sair.php">Sair</a></td>
          </tr>
        </table></td>
        <td width="83%" align="left" valign="top"><table width="727" height="343" border="0" cellpadding="2" cellspacing="0" background="../desenho do site/Quadrado_de_texto.png">
          <tr>
            <td width="710" height="338" align="center" valign="top"><p align="left" class="style1">Area Reservada</p>
              
               </p>
               <form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
                 <table align="center">
                   <tr valign="baseline">
                     <td nowrap="nowrap" align="right">NIF:</td>
                     <td><input type="text" name="NIF"  disabled="disabled" value="<?php echo $row_Recordset1['NIF']; ?>" size="14" /></td>
                   </tr>
                   <tr valign="baseline">
                     <td nowrap="nowrap" align="right">Utilizador:</td>
                     <td><input type="text" name="utilizador"  disabled="disabled" value="<?php echo htmlentities($row_Recordset1['utilizador'], ENT_COMPAT, 'utf-8'); ?>" size="20" /></td>
                   </tr>
                   <tr valign="baseline">
                     <td nowrap="nowrap" align="right">Activacao:</td>
                     <td><input type="text" name="activacao" value="<?php echo htmlentities($row_Recordset1['activacao'], ENT_COMPAT, 'utf-8'); ?>" size="1" /></td>
                   </tr>
                   <tr valign="baseline">
                     <td nowrap="nowrap" align="right">&nbsp;</td>
                     <td><input type="submit" value="Actualizar" /></td>
                   </tr>
                 </table>
                 <p>
                   <input type="hidden" name="MM_update" value="form2" />
                   <input type="hidden" name="NIF" value="<?php echo $row_Recordset1['NIF']; ?>" />
                 </p>
                 <table border="0" align="center">
                   <tr>
                     <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                           <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">Primeiro</a>
                           <?php } // Show if not first page ?>                     </td>
                     <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                           <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Anterior</a>
                           <?php } // Show if not first page ?>                     </td>
                     <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                           <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Seguinte</a>
                           <?php } // Show if not last page ?>                     </td>
                     <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                           <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Ultimo</a>
                           <?php } // Show if not last page ?>                     </td>
                   </tr>
                 </table>
                 </p>
                 <?php 
  				echo '<p>Total:' .$totalRows_Recordset1;
  				?>
               </form>
               <div align="center"></div></td>
          </tr>
        </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
<div align="center"><span class="style5">© 2009 Estima Diária - Serviços de limpeza, Lda. / Elaborado: anasofiagermano@gmail.com</span><span class="style5">
  </p>
  </span>
  </p>
</span></div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>