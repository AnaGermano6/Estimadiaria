<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style2 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
<link type="text/css" rel="stylesheet" 
href="Calendario/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" 
media="screen"></link>
<script type="text/javascript" src="Calendario/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
</head>

<body>
 <?php
            //liga e escolhe a BD 
				include("ligarBD.php"); 
				
				//início de acção sobre a BD 
				$procurar="select* from cliente where utilizador='".$_COOKIE['utilizador']."'";
				$faz_procura=mysqli_query($ligaBD,$procurar); 
				$linha = mysqli_fetch_assoc($faz_procura);
		 ?>   
<form id="form2" name="form2" method="post" action="orcamentoenviado1.php">
  <table width="200" border="0">
    <tr>
      <td colspan="2"><span class="style2">Limpeza
        <input type="hidden" name="nome" id="nome" value="<?php echo $linha['nome']; ?>" />
        <input type="hidden" name="email" id="email" value="<?php echo $linha['email']; ?>"/>
      </span></td>
    </tr>
    <tr>
      <td valign="top"><table width="311" height="223" border="0">
        <tr>
          <td width="129" height="24"  align="right" valign="middle"><strong>Sugestão de data:</strong></td>
          <td width="164" valign="middle"><span class="style1">
            <input name="data1" type="text" onclick="displayCalendar(document.forms[0].data1,'dd/mm/yyyy',this)" size="17" />
          </span></td>
        </tr>
        <tr>
          <td height="24" align="right" valign="middle"><strong>Caracter do serviço:</strong></td>
          <td valign="middle"><select name="caracter_servico" size="1" id="caracter_servico">
              <option>Ocasional</option>
              <option>Periódico</option>
          </select></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>Tipo de Infra-estrutura:</strong></td>
          <td valign="middle"><select name="tipo_infra_estrutura" size="1" id="tipo_infra_estrutura">
              <option>Condomínio</option>
              <option>Loja</option>
              <option>Armazém</option>
              <option>Fábrica</option>
              <option>Casas particulares</option>
              <option>Escritórios</option>
              <option>Restauração</option>
              <option>Outros</option>
          </select></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>Produtos incluídos:</strong></td>
          <td height="24" valign="middle"><label>
            <select name="produtos_incluidos" size="1" id="produtos_incluidos">
              <option>Sim</option>
              <option>Não</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>Descrição do serviço:</strong></td>
          <td height="24" valign="middle"><label>
            <input name="uma_geral" type="checkbox" id="uma_geral" value="uma geral" />
            </label>
            Uma geral</td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="26" valign="middle"><label>
            <input name="lavagem_vidros" type="checkbox" id="lavagem_vidros" value="lavagem de vidros" />
            Lavagem de vidros </label></td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="28" valign="middle"><label>
            <input name="lavagem_fachadas" type="checkbox" id="lavagem_fachadas" value="lavagem de fachadas" />
            </label>
            Lavagem de fachadas</td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="27" valign="middle"><label>
            <input name="lavagem_garagens" type="checkbox" id="lavagem_garagens" value="lavagem de garagens" />
            Lavagem de garagens</label></td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="27" valign="middle"><input name="lavagem_muros" type="checkbox" id="lavagem_muros" value="lavagem de muros" />
Lavagem de muros </td>
        </tr>
      </table></td>
      <td valign="top"><table width="329" height="134" border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td width="193" height="25" valign="top"><label>
            <input name="lavagem_campos" type="checkbox" id="lavagem_campos" value="lavagem de campos de jogos" />
            </label>
            Lavagem de campos de jogos</td>
        </tr>
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td height="25" valign="top"><label>
            <input name="tratamento_pedras" type="checkbox" id="tratamento_pedras" value="tratamento de pedras" />
            </label>
            Tratamento de pedras</td>
        </tr>
        <tr>
          <td height="28" align="right" valign="middle">&nbsp;</td>
          <td align="left" valign="top"><input type="checkbox" name="outro" id="outro" />
            Outros
            <input type="text" name="outros" size="20" id="textfield2" /></td>
        </tr>
        <tr>
          <td height="28" align="right" valign="middle"><strong>Observações do local:</strong></td>
          <td align="left" valign="top"><textarea name="observacoes" id="observacoes" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
          <td height="28" align="right" valign="middle">&nbsp;</td>
          <td align="right" valign="top"><input type="submit" name="button2" id="button2" value="Enviar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form> 
</body>
</html>
