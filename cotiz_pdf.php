<?php
require_once('dompdf/dompdf_config.inc.php');
$export='<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cotizacion</title>
</head>
<style type="text/css">
 
  

* {
  margin:  0;
  padding: 0;
}


  .arriba{
  	
  	padding:3px;
  	background-color: #000;
  	color: #FFF;
  	text-align:center;
  	font-size:24px;
  }

  .importante
  {
  	 	padding:3px;
  
  	color: #000;
  	text-align:center;
  	font-size:15px;
  	margin-top:30px;
  }
  .distancia
  {
  		padding:3px;
  
  	color: #000;
  	text-align:center;
  	font-size:13px;
  }

  #datos_emp
  {
  	margin-left:250px;
  	margin-top:-80px;
  }
  #imagen
  {
  	margin-top:5px;
  	margin-left:40px;
  	witdh:160px;
  	height:100px;
  }
  #encabezado{
    margin-left:80px;
  }

  #encabezado tr td{

     padding:5px;
  }
  #info_cli
  {
  	margin-left:7px;
  	margin-top:10px;
  	width:800px;
  }

  #productos
  {
  	margin-top:15px;
  	width:800px;
  	margin-left:7px;
  }

  #terminos
  {
  		margin-top:80px;
  	width:800px;
  	margin-left:7px;
  }

  #terminos tr td
  {
  	font-size:12px;
  }
  #autorizacion
  {
  	margin-top:50px;
  	margin-left:90px;
  }
</style>
<body>
	<h1 class="arriba">COTIZACIÓN</h1>
	
	<table id="encabezado">
    <tr>
       <td><img  src="images/SMI_LOGO2.png" alt="logo" witdh="220" height="130"></td>
       <td>  <h3>
           SM IMPORTS
        </h3>
        <p>
            RUC. 8-800-513 DV.86

        </p>
        <p>
Penonomé, Vía Interamericana.
        </p>
        <p>Plaza del Sol, Local #1</p>
        <p>Tel: 997-8947 </p>
        <p>Email: Ventas@smimports.net</p></td>
        <td align="center">
            <p style="padding-left:10px">N° REF:</p> <p style="color:red;font-weight:bold;padding-left:10px;font-size:22px" >1001</p>
        </td>
       
    </tr>
	</table>
	<table id="info_cli" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
     <tr><td colspan="3" align="center"><span style="font-weight:bold">INFORMACIÓN  DEL CLIENTE</span></td></tr>
     <tr><td>&nbsp;<span style="font-weight:bold">Fecha:</span> 2015-02-18</td><td>&nbsp;<span style="font-weight:bold">SMI:</span>14</td><td>&nbsp;<span style="font-weight:bold">Nombre:</span> Jailton Yanes</td></tr>
     <tr><td>&nbsp;<span style="font-weight:bold">Dirección:</span> Cra 6 # 51 b - 35 </td><td>&nbsp;<span style="font-weight:bold">Tel:</span> 3624483</td><td>&nbsp;<span style="font-weight:bold">E-mail:</span> jailtonyanesromero@gmail.com</td></tr>
	</table>
	<table id="productos" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
	  <tr>
           <td align="center"><span style="font-weight:bold">CANT</span></td>
           <td align="center"><span style="font-weight:bold">DESCRIPCIÓN</span></td>
           <td align="center"><span style="font-weight:bold">PRECIO WEB</span></td>
           <td align="center"><span style="font-weight:bold">FLETE SMI</span></td>
           <td align="center"><span style="font-weight:bold">TOTAL</span></td>
          
	  </tr>
	  <tr>
           <td align="center">1</td>
           <td align="left">&nbsp;Computador de mesa Asus</td>
           <td align="right">2,000.00&nbsp;</td>
           <td align="right">120.00&nbsp;</td>
           <td align="right">2,120.00&nbsp;</td>
	  </tr>
	  	  <tr>
           <td align="center">3</td>
           <td align="left">&nbsp;Carcasas para Iphone 6s plus</td>
           <td align="right">30.00&nbsp;</td>
           <td align="right">4.00&nbsp;</td>
           <td align="right">34.00&nbsp;</td>
	  </tr>
	  	  <tr>
           <td align="center">4</td>
           <td align="left">&nbsp;Cargadores universales para celular</td>
           <td align="right">10.00&nbsp;</td>
           <td align="right">40.00&nbsp;</td>
            <td align="right">45.00&nbsp;</td>
	  </tr>
	  <tr>
          <td colspan="4" align="right"><span style="font-weight:bold">SUB-TOTAL:</span></td>
          <td align="right"> 2,130.00&nbsp;</td>
       
          
	  </tr>
	    <tr>
          <td colspan="4" align="right"><span style="font-weight:bold">ITBMS:</span></td>
         
          <td align="right"> 149.01&nbsp;</td>
   
          
	  </tr>

  <tr>
          <td colspan="4" align="right"><span style="font-weight:bold">TOTAL:</span></td>
         
          <td align="right"> 2,279.01&nbsp;</td>
          
	  </tr>


	</table>

    <table id="terminos">
      <tr>
       <td align="justify">
         <span style="font-weight:bold"> Condiciones de venta:</span>
1. El tiempo estimado de llegada de los artículos puede comprender unos 8 a 15 días hábiles aproximadamente (pueden variar en función de la localización de los mismos, en especial si su lugar de procedencia se encuentra en Asia o Europa).
2. El cliente consta de 10 días hábiles para retirar su pedido desde que recibe el aviso de entrega. De no retirar su pedido en este periodo de tiempo, SM Imports  se verá en la necesidad de cobrar un costo diario de almacenaje equivalente al 5% del valor total del pedido. Si los días de almacenaje superan los 15 días calendario, se considerará abandono de mercancía y nos veremos en la obligación de rematar los mismos (el Cliente no tendrá derecho a reembolso).
3. El Cliente acepta que una vez realizada la compra y aceptado el pago, ya no es posible realizar cambios o anular el pedido.
4. Después de entregado el pedido NO se aceptan devoluciones de ningún tipo. Cualquier excepción a este lineamiento debe ser autorizado por el Gerente.
       </td>
      </tr>
  </table>

	<table id="autorizacion">
     <tr>
      <td align="center">
        ______________________________________________________________________
      </td>
     </tr>
     <tr>
      <td align="center">
        <span style="font-weight:bold">AUTORIZADO POR:</span>

      </td>
     </tr>
	</table>
<br/>
<br/>
<br/>
<br/>
	<h1 class="importante"> ESTA COTIZACIÓN TIENE UNA VALIDEZ DE TRES DÍAS A PARTIR DE LA FECHA DE EXPEDICIÓN DE LA MISMA </h1>
	<h2 class="distancia"> ¡Tus compras a un click de ti con SMI! </h2>

</body>
</html>';
$export=utf8_decode($export);
$dompdf = new DOMPDF();
$dompdf->load_html(utf8_encode($export));
ini_set("memory_limit","500M");
$dompdf->render();
$dompdf->stream("Cotizacion.pdf");
?>