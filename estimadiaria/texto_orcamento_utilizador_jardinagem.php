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
<form id="form2" name="form2" method="post" action="orcamentoenviadojardinagem1.php">
  <table width="200" border="0">
    <tr>
      <td colspan="2" valign="top"><span class="style2">Jardinagem</span></td>
    </tr>
    <tr>
      <td valign="top"><table width="328" height="223" border="0">
        <tr>
          <td width="129" height="24"  align="right" valign="middle"><strong>Sugestão de data:</strong></td>
          <td width="201" valign="middle"><span class="style1">
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
          <td align="right" valign="middle"><strong>Descrição do serviço:</strong></td>
          <td valign="middle"><label>
            <input name="criacao_jardim" type="checkbox" id="criacao_jardim" value="criação de jardim" />
            Criação de jardim</label></td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="24" valign="middle"><label>
            <input name="tratamento" type="checkbox" id="tratamento" value="tratamento de espacos verdes" />
            Tratamento de espaços verdes</label></td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="24" valign="middle"><label>
            <input name="uma_geral" type="checkbox" id="uma_geral" value="uma geral" />
          </label>
            Uma geral</td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="26" valign="middle"><label>
            <input name="plantacao_plantas" type="checkbox" id="plantacao_plantas" value="plantacao de arvores" />
            Plantação de plantas</label></td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="28" valign="middle"><label>
            <input name="plantacao_arvores" type="checkbox" id="plantacao_arvores" value="plantacao de arvores" />
          </label>
            Plantação de árvores</td>
        </tr>
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td height="27" valign="middle"><label>
            <input name="outro" type="checkbox" id="outro" value="outro" />
            Outros
            <input type="text" name="textfield3" size="15" id="textfield4" />
          </label></td>
        </tr>
      </table></td>
      <td valign="top"><table width="334" height="115" border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td width="135" align="right" valign="middle"><p><strong>Observações do local:</strong></p></td>
          <td width="202" height="26" align="left" valign="top"><textarea name="observacoes" id="observacoes" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
          <td width="135" align="right" valign="middle">&nbsp;</td>
          <td height="28" align="right" valign="top"><label></label>
              <input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form> 
</body>
</html>

