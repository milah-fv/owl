<!DOCTYPE html>
<html>
<head>
		<title>Manifiesto N° {{$servicio->id}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link id="pagestyle" href="{{ public_path('app_assets/css/pdf.css') }}" rel="stylesheet" />
</head>
<body>
	<header style="text-align: center;">
  		<img height="60px"  src="{{public_path('app_assets/img/cabecera_pdf.png')}}">
  	</header>

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>

  			<th width="150" style="text-align: right; padding-right: 10%"> <img src="{{ asset('app_assets/img/sello_original.png') }}" height="50px" alt="sello"></th>
  		</tr>
  	</table>
  	<h3 style="text-align: right; font-size: 13; margin-bottom: 0px; margin-top: 10; margin-right: 10px">MANIFIESTO DE CARGA TERRESTRE {{ $servicio->codigo }}</h3>
  	<br>
  	<table class="grid_productos" height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="15%" valign=top class="grid_sombreado"><b>AGENTE EMBARCADOR</b></td>
  			<td width="30%" valign=top style="padding-top: 0 "> One Way Logistica Internacional SA de CV</td>
  			<td width="15%" valign=top class="grid_sombreado"><b>PLACAS CAJA</b></td>
  			<td width="15%" valign=top style="padding-top: 0 ">TC-39BYL</td>
  			<td width="15%" valign=top class="grid_sombreado"><b>CAPACIDAD</b></td>
  			<td width="15%" valign=top style="padding-top: 0 ">53´</td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>OPERADOR</b></td>
  			<td valign=top style="padding-top: 0">Linner Manolo Bran</td>
  			<td valign=top class="grid_sombreado"><b>CODIGO</b></td>
  			<td valign=top style="padding-top: 0">No Aplica</td>
  			<td valign=top class="grid_sombreado"><b>ORIGEN</b></td>
  			<td valign=top style="padding-top: 0">México</td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>LICENCIA</b></td>
  			<td valign=top style="padding-top: 0">2822430460503</td>
  			<td valign=top class="grid_sombreado"><b>TRANSPORTE</b></td>
  			<td valign=top style="padding-top: 0">Transportes Shama</td>
  			<td valign=top class="grid_sombreado"><b>DESTINO</b></td>
  			<td valign=top style="padding-top: 0">Guatemala</td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>PLACAS TRACTO</b></td>
  			<td valign=top style="padding-top: 0">C-450BQQ</td>
  			<td valign=top class="grid_sombreado"><b>CAAT</b></td>
  			<td valign=top style="padding-top: 0">14BF</td>
  			<td valign=top class="grid_sombreado"><b>FECHA</b></td>
  			<td valign=top style="padding-top: 0"><mark>22 /10/2022</mark></td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>MEDIO DE TRANSPORTE</b></td>
  			<td valign=top style="padding-top: 0">Terrestre</td>
  			<td valign=top class="grid_sombreado"><b>ADUANA DE SALIDA</b></td>
  			<td valign=top style="padding-top: 0">SUCHIATE II</td>
  			<td valign=top class="grid_sombreado"><b>ADUANA DE INGRESO</b></td>
  			<td valign=top style="padding-top: 0">TECUN UMAN II</td>
  		</tr>
  	</table>
  	<br>
  	<table class="grid_productos" height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr class="grid_sombreado" style="text-align: center;">
  			<td width="25%" valign=top><b>REMITENTE</b></td>
  			<td width="20%" valign=top><b>CONSIGNATARIO</b></td>
  			<td width="15%" valign=top><b>FACTURA</b></td>
  			<td width="10%" valign=top><b>BULTOS</b></td>
  			<td width="25%" valign=top><b>CONTENIDO SEGÚN EMBARCADOR</b></td>
  			<td width="15%" valign=top><b>PESO BRUTO (KG)</b></td>
  		</tr>
  		<tr>
  			<td valign=top><b>{{ $servicio->exportador->nombre }}</b> <br> {{ $servicio->exportador->domicilio }}</td>
  			<td valign=top><b>{{ $servicio->importador->nombre }}</b> <br> {{ $servicio->importador->domicilio }}</td>
  			<td valign=top style="text-align: center">F-425 </td>
  			<td valign=top style="text-align: center">{{ $servicio->detalle->pallets }}</td>
  			<td valign=top>{{ $servicio->detalle->desc_mercaderia['descripcion_mercaderia'] }}</td>
  			<td valign=top style="text-align: center;">2.915,00</td>
  		</tr>
  		<tr class="grid_sombreado">
  			<td valign=top colspan="3" style="text-align: center;"><b>TOTALES</b></td>
  			<td valign=top style="text-align: center"><b>{{ $servicio->detalle->pallets }}</b></td>
  			<td></td>
  			<td valign=top style="text-align: center"><b>2.915,00</b></td>
  		</tr>

  	</table>
		<br>
		<br>
		<br>
		<br>
		<br>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px; text-align: center;">
  		<tr>
  			<td><b>____________________________________________</b></td>
  			<td><b>____________________________________________</b>  </td>
  		</tr>
  		<tr>
  			<td><b>FIRMA DEL TRANSPORTE</b></td>
  			<td><b>FIRMA DEL PILOTO</b></td>
  		</tr>
  	</table>
  		<br>
  		<br>
  		<br>
  		<hr>
  		<div style="text-align: center;">
  			<p>HACIENDA REDENCION, EXTERIOR 33B, SEGUNDO PISO, COL. LA PROVIDENCIA, METEPEC, MEXICO, CP 52177</p>
	  		<p>++52 7222 800 802 - www.owlogistica.com</p>
  		</div>
  		
</body>
</html>