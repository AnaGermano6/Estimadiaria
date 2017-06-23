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
<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' Deve conter um endereço de email.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' Deve ter um contacto.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' Deve conter um numero entre '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' preencimento obrigatorio.\n'; }
    } if (errors) alert('Ocorreu o(s) seguite(s) erro(s) :\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<style type="text/css">
<!--
.style3 {color: #FF0000}
.style4 {color: #000000}
-->
</style>
</head>

<body>
<form action="orcamentoenviadojardinagem.php" method="post" name="form3" id="form3" onsubmit="MM_validateForm('nome','','R','morada','','R','localidade','','R','contacto','','R','email','','R');return document.MM_returnValue">
  <table width="686" height="299" border="0">
    <tr>
      <td colspan="2" valign="top"><span class="style2">Jardinagem</span></td>
    </tr>
    <tr>
      <td width="340" valign="top"><table width="323" height="271" border="0">
        <tr>
          <td width="129"  align="right" valign="middle"><strong><span class="style3">*</span>Nome:</strong></td>
          <td width="184"><span class="style1">
            <input type="text" name="nome" id="nome" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>NIF:</strong></td>
          <td><span class="style1">
            <input type="text" name="NIF" size="15" id="NIF" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong><span class="style3">*</span>Morada:</strong></td>
          <td><span class="style1">
            <input type="text" name="morada" id="morada" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong><span class="style3">*</span>Localidade: </strong></td>
          <td><span class="style1">
            <input type="text" name="localidade" size="15" id="localidade" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong><span class="style3">*</span>Contacto:
            <label> </label>
                <label> </label>
          </strong></td>
          <td><span class="style1">
            <input type="text" name="contacto" size="15" id="contacto" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong><span class="style3">*</span>Correio electrónico: </strong></td>
          <td><span class="style1">
            <input type="text" name="email" id="email" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>Sugestão de data:</strong></td>
          <td><span class="style1">
            <input name="data1" type="text" onclick="displayCalendar(document.forms[0].data1,'dd/mm/yyyy',this)" size="17" />
          </span></td>
        </tr>
        <tr>
          <td height="29" align="right" valign="middle"><strong>Caracter do serviço:</strong></td>
          <td><select name="caracter" size="1" id="caracter">
              <option>Ocasional</option>
              <option>Periódico</option>
            </select>          </td>
        </tr>
        <tr>
          <td height="23" align="right" valign="middle"><strong>Descrição do serviço:</strong></td>
          <td><input name="criacao_jardim" type="checkbox" id="criacao_jardim" value="criação de jardim" />
Criação de jardim</td>
        </tr>
        <tr>
          <td height="29" align="right" valign="middle">&nbsp;</td>
          <td><input name="tratamento" type="checkbox" id="tratamento" value="tratamento de espacos verdes" />
Tratamento de espaços verdes</td>
        </tr>
      </table></td>
      <td width="353" valign="top"><table width="369" height="220" border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td width="127" align="right" valign="middle">&nbsp;</td>
          <td width="218" height="25" valign="top"><label>
            <input name="uma_geral" type="checkbox" id="uma_geral" value="uma geral" />
            </label>
            Uma geral</td>
        </tr>
        <tr>
          <td width="127" align="right" valign="middle">&nbsp;</td>
          <td height="25" valign="top"><input name="plantacao_plantas" type="checkbox" id="plantacao_plantas" value="plantacao de arvores" />
            Plantação de plantas</td>
        </tr>
        <tr>
          <td width="127" align="right" valign="middle">&nbsp;</td>
          <td height="25" valign="middle"><label>
            <input name="plantacao_arvores" type="checkbox" id="plantacao_arvores" value="plantacao de arvores" />
            </label>
            Plantação de árvores</td>
        </tr>
        <tr>
          <td width="127" align="right" valign="middle">&nbsp;</td>
          <td height="26" valign="top"><input name="outro" type="checkbox" id="outro" value="outro" />
            Outros
            <input type="text" name="outros" size="15" id="outros" /></td>
        </tr>
        <tr>
          <td height="91" align="right" valign="middle"><strong>Observações do local:</strong></td>
          <td valign="top"><textarea name="observacoes" id="observacoes" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
          <td height="28" align="right" valign="middle">&nbsp;</td>
          <td valign="top"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p class="style3">*<span class="style4">Prencimento obrigatório</span></p>
</form>
</body>
</html>
