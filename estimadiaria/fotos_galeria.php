<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estima Diária - Serviços de Limpeza, Lda.</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="efeitos/jQuery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="efeitos/jQuery/sexylightbox.v2.3.jquery.js"></script>
<link rel="stylesheet" href="efeitos/jQuery/sexylightbox.css" type="text/css" media="all" />
</head>
<body>
<table cellpadding="5" cellspacing="5">
<tr>
<?php
 $caminho = "fotos/";
$i=0;
  $dir = opendir($caminho);
 
  while ( ($imagem = readdir($dir)) !== false )
  {
     $img = $caminho.$imagem;
    
	if($i == 4){
	echo '</tr> <tr>';
	
	$i=0;
	}
	
	


if ($imagem != "." && $imagem != ".."){

$i++;
?>
<td><a href="<?php echo $img; ?>" rel="sexylightbox[galeria]" target="_blank"><img src="<?php echo $img; ?>" alt="" width="150"/></a></td>

<?php
}
 }
  closedir($dir);
 
 ?>
</table>
</body>
</html>