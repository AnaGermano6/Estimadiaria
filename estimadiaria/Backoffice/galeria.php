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
.style2 {
	font-size: 12px;
	font-weight: bold;
}
.style4 {color: #999999}
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
    <td width="100%" height = "100%" align="center" valign="middle"><table width="900" height="599" border="0" align="center" cellpadding="0" cellspacing="0" background="../desenho do site/Fundo_backoffice.jpg">
      <tr>
        <td height="214" colspan="2"><div align="center">
          <script type="text/javascript">
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
          </div></td>
      </tr>
      <tr>
        <td width="17%" height="321" valign="top"><table width="139" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="135" valign="top">
              
              <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','150','height','275','src','Botões','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','Botões' ); //end AC code
              </script>
              <noscript>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="150" height="275">
                <param name="movie" value="Botões.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <embed src="Botões.swf" width="150" height="275" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
              </object>
              </noscript>              </td>
          </tr>
          <tr>
            <td align="center" valign="top"><?php echo $_COOKIE['utilizador']?>, <a href="sair.php">Sair</a></td>
          </tr>
        </table></td>
        <td width="83%" align="center" valign="top"><table width="725" height="343" border="0" background="../desenho do site/Quadrado_de_texto.png">
          <tr>
            <td width="710" valign="top"><p class="style2">Galeria</p>
              <?php

//Diretório aonde ficará os arquivos
$dir = "../fotos/";

//Extensões permitidas
$ext = array("gif","jpg","png","jpeg", "JPEG", "JPG", "GIF", "PNG");

//Quant. de campos do tipo FILE
$campos = 4;

//Formulário
echo '<form method="post" action="" enctype="multipart/form-data">
  <p>Arquivo: <input type="file" name="file[]">

  <p>Arquivo: <input type="file" name="file[]">

  <p>Arquivo: <input type="file" name="file[]">
  
  <p>Arquivo: <input type="file" name="file[]">

  <input type="submit" name="submit" value=" OK ">
  </form>';
 
 
//Se for enviado
if (isset($_POST['submit'])) {

//Obtendo info. dos arquivos
$f_name = $_FILES['file']['name'];
$f_tmp = $_FILES['file']['tmp_name'];
$f_type = $_FILES['file']['type'];


//Contar arquivos enviados
$cont=0;

//Repetindo de acordo com a quantidade de campos FILE
for($i=0;$i<$campos;$i++){

//Pegando o nome
$name = $f_name[$i];

//Verificando se o campo contem arquivo
  if ( ($name!="") and (is_file($f_tmp[$i])) and (in_array(substr($name, -3),$ext)) ) {

    if ($cont==0) {
      echo "<b>Arquivo(s) enviados:
</b>";
    }
      echo $name." - ";

      //Movendo arquivo's do upload
	    $up = move_uploaded_file($f_tmp[$i], $dir.$name);

        //Status
        if ($up==true):
            echo  "<i>Enviado!</i>";
              $cont++;
        else:
            echo "<i>Falhou!</i>";
        endif;

      echo "
";
  }

}

echo ($cont!=0) ? "<i>Total de arquivos enviados: </i>".$cont : "Nenhum arquivo foi enviado!";
}
?>
<?php
// extençoes aceitas
foreach(array_merge(glob("*.gif"), glob("*.jpeg"), glob("*.jpg"), glob("*.png"), glob("*.JPG"), glob("*.PNG"), glob("*.GIF"), glob("*.JPEG")) as $arquivo ){
echo "<img src='".$arquivo."'<span class='style1'>--</span>";
}
?></td>
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
