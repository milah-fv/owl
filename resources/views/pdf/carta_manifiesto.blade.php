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
  	<h3 style="text-align: right; font-size: 13; margin-bottom: 0px; margin-top: 10; margin-right: 10px">MANIFIESTO DE CARGA TERRESTRE {{ $servicio->serie->serie }}-{{$servicio->id}}</h3>
  	<br>
  	<table class="grid_productos" height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="15%" valign=top class="grid_sombreado"><b>AGENTE EMBARCADOR</b></td>
  			<td width="30%" valign=top style="padding-top: 0 "> One Way Logistica Internacional SA de CV</td>
  			<td width="15%" valign=top class="grid_sombreado"><b>PLACAS CAJA</b></td>
  			<td width="15%" valign=top style="padding-top: 0 ">{{ isset($servicio->transporte->placa_cajas) ? $servicio->transporte->placa_cajas: old('placa_cajas') }}</td>
  			<td width="15%" valign=top class="grid_sombreado"><b>CAPACIDAD</b></td>
  			<td width="15%" valign=top style="padding-top: 0 ">{{ isset($servicio->transporte->capacidad) ? $servicio->transporte->capacidad: old('capacidad') }}</td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>OPERADOR</b></td>
  			<td valign=top style="padding-top: 0"> {{ isset($servicio->transporte->operador) ? $servicio->transporte->operador: old('operador') }} </td>
  			<td valign=top class="grid_sombreado"><b>CODIGO</b></td>
  			<td valign=top style="padding-top: 0"> {{ isset($servicio->transporte->codigo_aduanero) ? $servicio->transporte->codigo_aduanero: old('codigo_aduanero') }} </td>
  			<td valign=top class="grid_sombreado"><b>ORIGEN</b></td>
  			<td valign=top style="padding-top: 0">{{ $servicio->recolecciones->lugar_origen }}</td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>LICENCIA</b></td>
  			<td valign=top style="padding-top: 0"> {{ isset($servicio->transporte->licencia) ? $servicio->transporte->licencia: old('licencia') }} </td>
  			<td valign=top class="grid_sombreado"><b>TRANSPORTE</b></td>
  			<td valign=top style="padding-top: 0">{{ isset($servicio->transporte->transporte_afianzador) ? $servicio->transporte->transporte_afianzador: old('transporte_afianzador') }}</td>
  			<td valign=top class="grid_sombreado"><b>DESTINO</b></td>
  			<td valign=top style="padding-top: 0">{{ $servicio->entregas->lugar_destino}}</td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>PLACAS TRACTO</b></td>
  			<td valign=top style="padding-top: 0"> {{ isset($servicio->transporte->placas_tracto) ? $servicio->transporte->placas_tracto: old('placas_tracto') }} </td>
  			<td valign=top class="grid_sombreado"><b>CAAT</b></td>
  			<td valign=top style="padding-top: 0"> {{ isset($servicio->transporte->caat) ? $servicio->transporte->caat: old('caat') }} </td>
  			<td valign=top class="grid_sombreado"><b>FECHA</b></td>
  			<td valign=top style="padding-top: 0"><?php echo date("d-m-Y");?></td>
  		</tr>
  		<tr>
  			<td valign=top class="grid_sombreado"><b>MEDIO DE TRANSPORTE</b></td>
  			<td valign=top style="padding-top: 0">{{ $servicio->detalle->medio_transporte}}</td>
  			<td valign=top class="grid_sombreado"><b>ADUANA DE SALIDA</b></td>
  			<td valign=top style="padding-top: 0">{{$servicio->detalle->aduana_inicio}}</td>
  			<td valign=top class="grid_sombreado"><b>ADUANA DE INGRESO</b></td>
  			<td valign=top style="padding-top: 0">{{$servicio->detalle->aduana_ingreso}}</td>
  		</tr>
  	</table>
  	<br>
  	<table class="grid_productos" height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr class="grid_sombreado" style="text-align: center;">
  			<td width="25%" valign=top><b>REMITENTE</b></td>
  			<td width="20%" valign=top><b>CONSIGNATARIO</b></td>
  			<td width="15%" rowspan="2" style="text-align: center;"><b>FACTURA</b></td>
  			<td width="10%" rowspan="2"><b>BULTOS</b></td>
  			<td width="25%" rowspan="2"><b>CONTENIDO SEGÚN EMBARCADOR</b></td>
  			<td width="15%" rowspan="2"><b>PESO BRUTO (KG)</b></td>
  		</tr>
  		<tr>
  			<td valign=top rowspan=" {{$cantfilas}} "><b> {{ isset($servicio->exportador->nombre) ? $servicio->exportador->nombre: old('nombre_exportador') }} </b> <br> {{ isset($servicio->exportador->domicilio) ? $servicio->exportador->domicilio: old('domicilio_exportador') }} </td>
  			<td valign=top rowspan="  {{$cantfilas}}"><b>  {{ isset($servicio->importador->nombre) ? $servicio->importador->nombre: old('nombre_importador') }}  </b> <br>{{ isset($servicio->importador->domicilio) ? $servicio->importador->domicilio: old('domicilio_importador') }}</td>
  			
  		</tr>
  		
  		@foreach($servicio->productos as $producto)
  		<tr>
  			<td valign=top style="text-align: center"> {{ isset($producto->factura) ? $producto->factura: old('producto_factura[]') }} </td>
  			<td valign=top style="text-align: center"> {{ isset($producto->cajas) ? $producto->cajas: old('producto_cajas[]') }} </td>
  			<td valign=top> {{ isset($producto->contenido) ? $producto->contenido: old('producto_descripcion[]') }} </td>
  			<td valign=top style="text-align: center;">{{ isset($producto->peso) ? $producto->peso: old('producto_peso[]') }} </td>
  		</tr>
  		@endforeach
  		<tr class="grid_sombreado">
  			<td valign=top colspan="3" style="text-align: center;"><b>TOTALES</b></td>
  			<td valign=top style="text-align: center"><b><mark></mark></b></td>
  			<td></td>
  			<td valign=top style="text-align: center"><b><mark></mark></b></td>
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
  		<hr>
  		<div style="text-align: center;">
  			<p>HACIENDA REDENCION, EXTERIOR 33B, SEGUNDO PISO, COL. LA PROVIDENCIA, METEPEC, MEXICO, CP 52177</p>
	  		<p>++52 7222 800 802 - www.owlogistica.com</p>
  		</div>
  		
</body>
</html>