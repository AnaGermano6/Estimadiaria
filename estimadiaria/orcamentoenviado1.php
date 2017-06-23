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
$tipo_infra_estrutura=$_POST["tipo_infra_estrutura"];
$produtos_incluidos=$_POST["produtos_incluidos"];
$observacoes=$_POST["observacoes"];

if(isset($_POST["uma_geral"])){
	$uma_geral=$_POST["uma_geral"];
}
else {
	$uma_geral="";
}
if(isset($_POST["lavagem_vidros"])){
	$lavagem_vidros=$_POST["lavagem_vidros"];
}
else {
	$lavagem_vidros="";
}
if(isset($_POST["lavagem_fachadas"])){
	$lavagem_fachadas=$_POST["lavagem_fachadas"];
}
else {
	$lavagem_fachadas="";
}
if(isset($_POST["lavagem_garagens"])){
	$lavagem_garagens=$_POST["lavagem_garagens"];
}
else {
	$lavagem_garagens="";
}
if(isset($_POST["lavagem_muros"])){
	$lavagem_muros=$_POST["lavagem_muros"];
}
else {
	$lavagem_muros="";
}
if(isset($_POST["lavagem_campos"])){
	$lavagem_campos=$_POST["lavagem_campos"];
}
else {
	$lavagem_campos="";
}
if(isset($_POST["tratamento_pedras"])){
	$tratamento_pedras=$_POST["tratamento_pedras"];
}
else {
	$tratamento_pedras="";
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
$descricao="".$uma_geral."".$lavagem_vidros."".$lavagem_fachadas."".$lavagem_garagens."".$lavagem_muros."".$lavagem_campos."".$tratamento_pedras."".$outros."".$outros;

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
$msg="- Nome: ".$nome."<br>- Assunto: ".$assunto."<br>- Mensagem: <br>- Sugestão de data: ".$sugestao_horario."<br>- Caracter do serviço: ".$caracter_servico."<br>- Tipo de Infra Estrutura: ".$tipo_infra_estrutura."<br>- Produtos Includos: ".$produtos_incluidos."<br>- Descrição: ".$descricao."<br>- Observações do local: ".$observacoes;

mail ("$email", "$assunto", "$msg", "from: ".$destinatario.$formato);

// confirmação do email
echo "<div align=center>Mensagem enviada com sucesso! Aguarde por uma resposta. </div>";

?>