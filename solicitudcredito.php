<?php
require_once("dompdf/dompdf_config.inc.php");
			
			
$html='<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<p align="right">SOLICITUD &ndash; CONTRATO CR&Eacute;DITO NEGOCIOS SFG </p>
<p align="right"> PERSONA MORAL </p>

  <div align="right">
   
    <table width="155" height="80" border="1" cellspacing="0">
  <tr>
    <td width="64">&nbsp;</td>
    <td width="26">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="155" height="80" border="1" cellspacing="0">
  <tr>
    <td width="47">&nbsp;</td>
    <td width="98">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<input name="radiobutton" type="radio" value="radiobutton" checked>
</div>


<p align="right">&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>';

 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("ejemplo.pdf");
?>