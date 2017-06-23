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
</style><?php

$sugestoes=$_POST["sugestoes"];

if(isset($_POST["pergunta1"])){
	$p1=$_POST["pergunta1"];
}
else {
	$p1="";
}
if(isset($_POST["pergunta2"])){
	$p2=$_POST["pergunta2"];
}
else {
	$p2="";
}
if(isset($_POST["pergunta3"])){
	$p3=$_POST["pergunta3"];
}
else {
	$p3="";
}
if(isset($_POST["pergunta4"])){
	$p4=$_POST["pergunta4"];
}
else {
	$p4="";
}
if(isset($_POST["pergunta5"])){
	$p5=$_POST["pergunta5"];
}
else {
	$p5="";
}
if(isset($_POST["pergunta6"])){
	$p6=$_POST["pergunta6"];
}
else {
	$p6="";
}
if(isset($_POST["pergunta7"])){
	$p7=$_POST["pergunta7"];
}
else {
	$p7="";
}
if(isset($_POST["pergunta8"])){
	$p8=$_POST["pergunta8"];
}
else {
	$p8="";
}

//liga a BD
include("ligarBD.php");

$existe="SELECT nome, email FROM cliente WHERE utilizador='".$_COOKIE['utilizador']."'";
$faz_existe=mysqli_query($ligaBD,$existe);
$num_registos=mysqli_num_rows($faz_existe);
if($num_registos==1){ //se existe...
$linha = mysqli_fetch_assoc($faz_existe);
$nome=$linha["nome"];
$email=$linha["email"];
}

// o distinatario do email
$destinatario="estimadiaria@hotmail.com";
$formato="\nContent-type: text/html\n";
$assunto="Orçamento";

// a mensagem do email
$msg="- Nome: ".$nome."<br>- Assunto: ".$assunto."<br>- Mensagem: <br>- Perguntas: <br>- Pergunta1: Acha que a limpeza que lhe é fornecida pela nossa empresa é eficaz? ".$p1." <br>- Pergunta2: A qualidade do serviço é: ".$p2." <br>- Pergunta3: 	A facilidade que lhe é dada para a exposição de problemas é: ".$p3." <br>- Pergunta4: Resolução imediata de questões é: ".$p4." <br>- Pergunta5: Rapidez e simpatia no atendimento:".$p5." <br>- Pergunta6: Resposta a reclamações e solicitações: ".$p6." <br>- Pergunta7: O que pensa sobre os aromas que são utilizados nas vossas instalações: ".$p7." <br>- Pergunta8: Recomendaria a nossa empresa a conhecidos como:  ".$p8."<br>- Sugestões: ".$sugestoes;

mail ("$email", "$assunto", "$msg", "from: ".$destinatario.$formato);

// confirmação do email
echo "<div align=center>Mensagem enviada com sucesso! Aguarde por uma resposta. <a href='Index.html'> <b>Voltar</b> </a></div>";

?>