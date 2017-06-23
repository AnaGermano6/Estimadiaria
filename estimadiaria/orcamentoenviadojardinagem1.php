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

//captar dados do formulário
$sugestao_horario=$_POST["data1"];
$caracter_servico=$_POST["caracter_servico"];
$observacoes=$_POST["observacoes"];

if(isset($_POST["criacao_jardim"])){
	$criacao_jardim=$_POST["criacao_jardim"];
}
else {
	$criacao_jardim="";
}
if(isset($_POST["tratamento"])){
	$tratamento=$_POST["tratamento"];
}
else {
	$tratamento="";
}
if(isset($_POST["uma_geral"])){
	$uma_geral=$_POST["uma_geral"];
}
else {
	$uma_geral="";
}
if(isset($_POST["plantacao_plantas"])){
	$plantacao_plantas=$_POST["plantacao_plantas"];
}
else {
	$plantacao_plantas="";
}
if(isset($_POST["plantacao_arvores"])){
	$plantacao_arvores=$_POST["plantacao_arvores"];
}
else {
	$plantacao_arvores="";
}
if(isset($_POST["outro"])){
	$outros=$_POST["outro"];
}
else {
	$outros="";
}
if(isset($_POST["outros"])){
	$outros=$_POST["outros"];
}
else {
	$outros="";
}
$descricao="".$criacao_jardim."".$tratamento."".$uma_geral."".$plantacao_plantas."".$plantacao_arvores."".$outros."".$outros;


//liga a BD
include("ligarBD.php");

$existe="SELECT nome, email FROM cliente WHERE utilizador='".$_COOKIE['utilizador']."'";
$faz_existe=mysqli_query($ligaBD,$existe);
$num_registos=mysqli_num_rows($faz_existe);
if($num_registos==1){ //se existe...
$linha = mysqli_fetch_assoc($faz_existe);
$nome=$linha['nome'];
$email=$linha['email'];
}

// o distinatario do email
$destinatario="estimadiaria@hotmail.com";
$formato="\nContent-type: text/html\n";
$assunto="Orçamento";

// a mensagem do email
$msg="- Nome: ".$nome."<br>- Assunto: ".$assunto."<br>- Mensagem: <br>- Sugestão de data: ".$sugestao_horario."<br>- Carater do serviço: ".$caracter_servico."<br>- Descrição: ".$descricao."<br>- Observações do local: ".$observacoes;

mail ("$email", "$assunto", "$msg", "from: ".$destinatario.$formato);

// confirmação do email
echo "<div align=center>Mensagem enviada com sucesso! Aguarde por uma resposta. </div>";

?>
