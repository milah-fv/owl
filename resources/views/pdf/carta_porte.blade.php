<!DOCTYPE html>
<html>
<head>
	<title>Carta Porte N° {{$servicio->id}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link id="pagestyle" href="{{ public_path('app_assets/css/pdf.css') }}" rel="stylesheet" />
</head>
<body>
	<header>
  		<img height="50px"  src="{{public_path('app_assets/img/cabecera_pdf.png')}}">
  	</header>
  	<h4 style="text-align: right; font-size:10; margin-bottom: 0px; margin-top: 10; margin-right: 10px">CARTA PORTE {{ $servicio->codigo }}</h4>
  	<p style="text-align: right; font-size:9; margin-top: 0px; margin-right: 10px">CONOCIMIENTO DE EMARQUE TERRESTRE</p>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: left; padding: 2px;"><b>AGENTE EMBARCADOR</b></td>
      </tr>
    </table>  
    <table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="350"> <b>ONE WAY LOGISTICA INTERNACIONAL, S.A. DE C.V.</b> </td>
  			<td style="padding-left: 30px;" width="40"  > <b>RFC: </b> </td>
  			<!-- <td style="text-align: center" > -  -->
  			<td > <b> OWL151114BD0 </b> </td>
  		</tr>
  		<tr>
  			<td  width="100%">Hacienda Redencion 33B 2do piso, Col. La Providencia, Metepec, Edo. de México, Mexico, CP. 52177</td>
  		</tr>
  	</table>  

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: left; padding: 2px;"><b>REMITENTE</b></td>
      </tr>
    </table> 
    <table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="350"> <b> {{ $servicio->exportador->nombre }}</b> </td>
  			<td style="padding-left: 30px;" width="40"  > <b>RFC: </b> </td>
  			<!-- <td style="text-align: center" > -  -->
  			<td > <b> {{ $servicio->exportador->rfc }} </b> </td>
  		</tr>
  		<tr>
  			<td  width="100%">{{ $servicio->exportador->domicilio }}</td>
  		</tr>
  	</table>  

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: left; padding: 2px;"><b>CONSIGNATARIO</b></td>
      </tr>
    </table> 
    <table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="350"> <b> {{ $servicio->importador->nombre }}</b> </td>
  			<td style="padding-left: 30px;" width="80"  > <b>REGISTRO FISCAL: </b> </td>
  			<!-- <td style="text-align: center" > -  -->
  			<td > <b> {{ $servicio->importador->nit }} </b> </td>
  		</tr>
  		<tr>
  			<td  width="100%" >{{ $servicio->importador->domicilio }}</td>
  		</tr>
  	</table> 

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: left; padding: 2px;"><b>ENTREGA</b></td>
      </tr>
    </table> 
    <table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="100%"> {{ $servicio->entregas->lugar_entrega }} </b> </td>
  		</tr>
  	</table>
  	<table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="100%"> {{ $servicio->entregas->lugar_entrega }} </b> </td>
  		</tr>
  	</table> 
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<th width="150">LUGAR Y PAÍS DE ORIGEN</th>
  			<th width="150">MEDIO DE TRANSPORTE</th>
  			<th width="150">ADUANA DE INICIO: <b style="background-color: yellow">Tecun Uman</b></th>
  		</tr>
  		<tr>
  			<td style="background-color: yellow">Puebla Mexico</td>
  			<td style="background-color: yellow">Terrestre</td>
  			<td>ADUANA DE INGRESO: <b style="background-color: yellow">EL GUASAULE</b></td>
  		</tr>
  	</table>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<th width="150">LUGAR DE CARGA</th>
  			<th width="150">DESTINO FINAL</th>
  			<th rowspan="2" width="150" style="text-align: center;"> <img src="{{ asset('app_assets/img/sello_original.png') }}" height="50px" alt="sello"></th>
  		</tr>
  		<tr>
  			<td>{{$servicio->cargas->lugar_carga}}</td>
  			<td style="background-color: yellow">Managua, Nicaragua</td>
  		</tr>
  	</table>

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: center; padding: 2px;"><b>INFORMACIÓN DEL TRANSPOTE</b></td>
      </tr>
    </table> 
    <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="25%" valign=top><b>OPERADOR:</b> <br> <mark> Bismarck José Guevara Martinez</mark> </td>
  			<td width="20%" valign=top><b>PLACAS TRACTO:</b> <br> <mark>CH33267</mark></td>
  			<td width="25%" valign=top><b>LICENCIA: </b><br> 0811004860007W</td>
  			<td width="15%" valign=top><b>CAAT: </b> <br> 3HB3</td>
  			<td width="15%" valign=top><b>NUMERO ECO: </b> <br>3388 </td>
  		</tr>
  	</table>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="25%" valign=top><b>CAPACIDAD:</b> <br> <mark> 53 REF 3 EJES</mark> </td>
  			<td width="20%" valign=top><b>PLACAS CAJA:</b> <br> <mark>TC- 88BTZ</mark></td>
  			<td width="25%" valign=top><b>TRANSPORTE AFIANZADOR: </b> <br> <mark>Moreno Salazar</mark></td>
  			<td width="30%" valign=top colspan="2"><b>CODIGO ADUANERO: </b> <br> <mark> NI06335</mark></td>
  		</tr>
  	</table>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: center; padding: 2px;"><b>DESCRIPCIÓN DE LOS ARTÍCULOS DADOS POR EL REMITENTE</b></td>
      </tr>
    </table> 
    <table  class="grid_productos" height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<th width="15%" valign=top>FACTURAS</th>
  			<th width="20%" valign=top>CAJAS</th>
  			<th width="40%" valign=top>CONTENIDO SEGUN EMBARCADOR</th>
  			<th width="20%" valign=top>PESO BRUTO (KILOS)</th>
  		</tr>
  		<tr>
  			<td valign=top style="text-align: center;">00165964</td>
  			<td valign=top>2183 (Contendidas en 24 pallets)</td>
  			<td valign=top>Agua Gasificada con alcohol - FLR 355ml/12oz-4/6-Slk-Lime - 91</td>
  			<td valign=top style="text-align:right; padding-right: 20px;">20.995,00</td>
  		</tr>
  		<tr style="background-color: #e6e6e6">
  			<td valign=top style="text-align: center;"><b>TOTAL DE CAJAS</b></td>
  			<td valign=top style="text-align: center;">2183</td>
  			<td valign=top></td>
  			<td valign=top style="text-align:right; padding-right: 20px;">20.995,00</td>
  		</tr>
  	</table>
  	<br>
  	<table class="grid_productos"  height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="23%" valign=top><b>FLETES:</b></td>
  			<td width="17%" valign=top style="text-align: right; border-left:1px solid none"><mark>$4.200,00</mark></td>
  			<td width="60%" valign=top style="background-color: #e6e6e6"><b>OTROS CARGOS: </b></td>
  		</tr>
  		<tr>
  			<td valign=top><b>SEGURO:</b></td>
  			<td valign=top style="text-align: right;"><mark>$4.200,00</mark></td>
  			<td valign=top rowspan="2"></td>
  		</tr>
  		<tr style="background-color: #e6e6e6">
  			<td valign=top><b>TOTAL AL COBRO (USD): </b></td>
  			<td valign=top style="text-align: right;"><mark>$4.200,00</mark></td>
  			
  		</tr>
  	</table>
  	<br>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px; padding: 2PX;">
  		<tr>
  			<td width="40%" valign=top rowspan="4" style="text-align: justify ; padding-right: 20px;">La mercancia viaja por cuenta y riesgo del embarcador, 01 original de este conocimeinto de embarque ha sido entregado al embarcador.</td>
  			<td valign=top style="background-color: #e6e6e6; padding: 2px;" colspan="2"><b>PREPARADO POR: </b></td>
  		</tr>
  		<tr>
  			
  			<td valign=top style="text-align: center;">Estefania Alvarado</td>
  			<td valign=top style="text-align: center;">Coordinadora de Comercio Exterior</td>
  		</tr>
  		<tr style="background-color: #e6e6e6; padding: 2px;">
  			<td valign=top ><b>FECHA: </b></td>
  			<td valign=top ><b>LUGAR: </b></td>
  			
  		</tr>
  		<tr>
  			<td valign=top style="text-align: center;"><mark>22 /10/2022</mark></td>
  			<td valign=top style="text-align: center;">CIUDAD HIDALGO, CHIAPAS</td>
  			
  		</tr>
  	</table>
  	<br>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style="text-align: left; padding: 2px;"><b>*EL COSTO DEL FLETE DEBERA SER PAGADO POR ADELANTADO Y ANTES DE LA ENTREGA.</b></td>
      </tr>
    </table> 
</body>
</html>