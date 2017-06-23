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
<link type="text/css" rel="stylesheet" 
href="Calendario/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" 
media="screen"></link>
<script type="text/javascript" src="Calendario/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
<style type="text/css">
<!--
.style3 {color: #FF0000}
.style4 {color: #000000}
-->
</style>
</head>

<body>
<form action="orcamentoenviado.php" method="post" name="form2" id="form2" onsubmit="MM_validateForm('nome','','R','morada','','R','localidade','','R','contacto','','R','email','','R');return document.MM_returnValue">

  <table width="670" height="192" border="0">
    <tr>
      <td colspan="2" valign="top"><span class="style2">Limpeza</span></td>
    </tr>
    <tr>
      <td width="303" valign="top"><table width="303" height="333" border="0">
        <tr>
          <td width="129"  align="right" valign="middle"><strong><span class="style3">*</span>Nome:</strong></td>
          <td width="164"><span class="style1">
            <input type="text" name="nome" id="nome" />
          </span></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><strong>NIF: </strong></td>
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
          <td><select name="carater_servico" size="1" id="caracter">
              <option>Ocasional</option>
              <option>Periódico</option>
            </select>          </td>
        </tr>
        <tr>
          <td height="29" align="right" valign="middle"><strong>Tipo de Infra-estrutura:</strong></td>
          <td><select name="tipo_infra_estrutura" size="1" id="infra_estrutura">
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
          <td height="29" align="right" valign="middle"><strong>Produtos incluídos:</strong></td>
          <td><select name="produtos_incluidos" size="1" id="produtos">
              <option>Sim</option>
              <option>Não</option>
          </select></td>
        </tr>
        <tr>
          <td height="23" align="right" valign="middle"><strong>Descrição do serviço:</strong></td>
          <td><label>
            <input name="uma_geral" type="checkbox" id="uma_geral" value="uma geral" />
          </label>
Uma geral
<label></label></td>
        </tr>
        <tr>
          <td height="29" align="right" valign="middle">&nbsp;</td>
          <td><input name="lavagem_vidros" type="checkbox" id="lavagem_vidros" value="lavagem de vidros" />
Lavagem de vidros</td>
        </tr>
      </table></td>
      <td width="357" valign="top"><table width="356" height="235" border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td width="220" height="18" valign="top"><label>
            <input name="lavagem_fachadas" type="checkbox" id="lavagem_fachadas" value="lavagem de fachadas" />
            </label>
            Lavagem de fachadas</td>
        </tr>
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td height="18" valign="top"><input name="lavagem_garagens" type="checkbox" id="lavagem_garagens" value="lavagem de garagens" />
            Lavagem de garagens</td>
        </tr>
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td height="18" valign="top"><input name="lavagem_muros" type="checkbox" id="lavagem_muros" value="lavagem de muros" />
            Lavagem de muros </td>
        </tr>
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td height="18" valign="top"><label>
            <input name="lavagem_campos" type="checkbox" id="lavagem_campos" value="lavagem de campos de jogos" />
            </label>
            Lavagem de campos de jogos</td>
        </tr>
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td height="24" valign="top"><label>
            <input name="tratamento_pedras" type="checkbox" id="tratamento_pedras" value="tratamento de pedras" />
            </label>
            Tratamento de pedras</td>
        </tr>
        <tr>
          <td width="128" align="right" valign="middle">&nbsp;</td>
          <td height="18" valign="top"><input type="checkbox" name="outro" id="outro" />
            Outros
            <input type="text" name="outros" size="20" id="outros" /></td>
        </tr>
        <tr>
          <td height="87" align="right" valign="middle"><strong>Observações do local</strong>:</td>
          <td valign="top"><textarea name="observacoes" id="observacoes" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
          <td height="34" align="right" valign="middle">&nbsp;</td>
          <td valign="top"><input type="submit" name="button2" id="button2" value="Enviar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p><span class="style3">*<span class="style4">Prencimento obrigatório</span></span></p>
</form>
</body>
</html>
