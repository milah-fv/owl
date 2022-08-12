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
  	<h4 style="text-align: right; font-size:10; margin-bottom: 0px; margin-top: 10; margin-right: 10px">CARTA PORTE {{ $servicio->serie->serie }}-{{$servicio->id}}</h4>
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
  			<td width="350"> <b>  {{ isset($servicio->exportador->nombre) ? $servicio->exportador->nombre: old('nombre_exportador') }}</b> </td>
  			<td style="padding-left: 30px;" width="40"  > <b>RFC: </b> </td>
  			<!-- <td style="text-align: center" > -  -->
  			<td > <b> {{ isset($servicio->exportador->rfc) ? $servicio->exportador->rfc: old('rfc_exportador') }} </b> </td>
  		</tr>
  		<tr>
  			<td  width="100%"> {{ isset($servicio->exportador->domicilio) ? $servicio->exportador->domicilio: old('domicilio_exportador') }} </td>
  		</tr>
  	</table>  

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: left; padding: 2px;"><b>CONSIGNATARIO</b></td>
      </tr>
    </table> 
    <table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="350"> <b> {{ isset($servicio->importador->nombre) ? $servicio->importador->nombre: old('nombre_importador') }} </b> </td>
  			<td style="padding-left: 30px;" width="80"  > <b>REGISTRO FISCAL: </b> </td>
  			<!-- <td style="text-align: center" > -  -->
  			<td > <b> {{ isset($servicio->importador->nit) ? $servicio->importador->nit: old('nit_importador') }} </b> </td>
  		</tr>
  		<tr>
  			<td  width="100%" > {{ isset($servicio->importador->domicilio) ? $servicio->importador->domicilio: old('domicilio_importador') }} </td>
  		</tr>
  	</table> 

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" class="grid_carta_porte"><b>ENTREGA</b></td>
      </tr>
    </table> 
    <table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="100%"> {{ $servicio->entregas->lugar_entrega }} </b> </td>
  		</tr>
  	</table>
  	
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<th width="30%" class="grid_carta_porte">LUGAR Y PAÍS DE ORIGEN</th>
  			<th width="30%" class="grid_carta_porte">MEDIO DE TRANSPORTE</th>
  			<th width="20%" class="grid_carta_porte">ADUANA DE SALIDA:</th>
        <th width="20%" class="grid_carta_porte">ADUANA DE INGRESO:</th>
  		</tr>
  		<tr>
  			<td>{{$servicio->recolecciones->lugar_origen}}</td>
  			<td>{{$servicio->detalle->medio_transporte}}</td>
        <td>{{$servicio->detalle->aduana_inicio}}</td>
  			<td>{{$servicio->detalle->aduana_ingreso}}</b></td>
  		</tr>
  	</table>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<th width="30%" class="grid_carta_porte">LUGAR DE CARGA</th>
  			<th width="30%" class="grid_carta_porte">DESTINO FINAL</th>
  			<th rowspan="2" width="40%" style="text-align: center;"> <img src="{{ asset('app_assets/img/sello_original.png') }}" height="50px" alt="sello"></th>
  		</tr>
  		<tr>
  			<td>{{$servicio->cargas->lugar_carga}}</td>
  			<td>{{$servicio->entregas->lugar_destino}}</td>
  		</tr>
  	</table>

  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: center; padding: 2px;"><b>INFORMACIÓN DEL TRANSPOTE</b></td>
      </tr>
    </table> 
    <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="25%" valign=top><b>OPERADOR:</b> <br> {{ isset($servicio->transporte->operador) ? $servicio->transporte->operador: old('operador') }} </td>
  			<td width="20%" valign=top><b>PLACAS TRACTO:</b> <br> {{ isset($servicio->transporte->placas_tracto) ? $servicio->transporte->placas_tracto: old('placas_tracto') }} </td>
  			<td width="25%" valign=top><b>LICENCIA: </b><br> {{ isset($servicio->transporte->licencia) ? $servicio->transporte->licencia: old('licencia') }} </td>
  			<td width="15%" valign=top><b>CAAT: </b> <br> {{ isset($servicio->transporte->caat) ? $servicio->transporte->caat: old('caat') }} </td>
  			<td width="15%" valign=top><b>NUMERO ECO: </b> <br> {{ isset($servicio->transporte->nro_eco) ? $servicio->transporte->nro_eco: old('nro_eco') }} </td>
  		</tr>
  	</table>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="25%" valign=top><b>CAPACIDAD:</b> <br>{{ isset($servicio->transporte->capacidad) ? $servicio->transporte->capacidad: old('capacidad') }}</td>
  			<td width="20%" valign=top><b>PLACAS CAJA:</b> <br>{{ isset($servicio->transporte->placa_cajas) ? $servicio->transporte->placa_cajas: old('placa_cajas') }}</td>
  			<td width="25%" valign=top><b>TRANSPORTE AFIANZADOR: </b> <br>{{ isset($servicio->transporte->transporte_afianzador) ? $servicio->transporte->transporte_afianzador: old('transporte_afianzador') }}</td>
  			<td width="30%" valign=top colspan="2"><b>CODIGO ADUANERO: </b> <br> {{ isset($servicio->transporte->codigo_aduanero) ? $servicio->transporte->codigo_aduanero: old('codigo_aduanero') }}</td>
  		</tr>
  	</table>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style=" background-color: #e6e6e6; text-align: center; padding: 2px;"><b>DESCRIPCIÓN DE LOS ARTÍCULOS DADOS POR EL REMITENTE</b></td>
      </tr>
    </table> 
    <table  class="grid_productos" height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;" id="productos">
  		<tr>
  			<th width="15%" valign=top>FACTURAS</th>
  			<th width="20%" valign=top>CAJAS</th>
  			<th width="40%" valign=top>CONTENIDO SEGUN EMBARCADOR</th>
  			<th width="20%" valign=top>PESO BRUTO (KILOS)</th>
  		</tr>
      @foreach($servicio->productos as $producto)
  		<tr>
  			<td valign=top style="text-align: center;"> {{ isset($producto->factura) ? $producto->factura: old('producto_factura[]') }} </td>
  			<td valign=top style="text-align: center;"> {{ isset($producto->cajas) ? $producto->cajas: old('producto_cajas[]') }} </td>
  			<td valign=top> {{ isset($producto->contenido) ? $producto->contenido: old('producto_descripcion[]') }}</td>
  			<td valign=top style="text-align:center; padding-right: 20px;"> {{ isset($producto->peso) ? $producto->peso: old('producto_peso[]') }} </td>
  		</tr>
      @endforeach
  		<tr style="background-color: #e6e6e6">
  			<td valign=top style="text-align: center;"><b>TOTAL DE CAJAS</b></td>
  			<td valign=top style="text-align: center;" id = "totalcajas"> <mark></mark></td>
  			<td valign=top></td>
  			<td valign=top style="text-align: center; padding-right: 20px;"> <mark></mark></td>
  		</tr>
  	</table>
  	<br>
  	<table class="grid_productos"  height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
  		<tr>
  			<td width="23%" valign=top><b>FLETES:</b></td>
  			<td width="17%" valign=top style="text-align: right; border-left:1px solid none"> $ {{ isset($servicio->pago->flete) ? $servicio->pago->flete: old('flete') }} </td>
  			<td width="60%" valign=top style="background-color: #e6e6e6"><b>OTROS CARGOS: </b></td>
  		</tr>
  		<tr>
  			<td valign=top><b>SEGURO:</b></td>
  			<td valign=top style="text-align: right;">$ {{ isset($servicio->pago->seguro) ? $servicio->pago->seguro: old('seguro') }} </td>
  			<td valign=top rowspan="2"> {{ old('observaciones', $servicio->detalle->observaciones) }} </td>
  		</tr>
  		<tr style="background-color: #e6e6e6">
  			<td valign=top><b>TOTAL AL COBRO (USD): </b></td>
  			<td valign=top style="text-align: right;">$ {{ isset($servicio->pago->total) ? $servicio->pago->total: old('total') }}</td>
  			
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
  			<td valign=top style="text-align: center;"><?php echo date("d-m-Y");?></td>
  			<td valign=top style="text-align: center;">CIUDAD HIDALGO, CHIAPAS</td>
  			
  		</tr>
  	</table>
  	<br>
  	<table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style="text-align: left; padding: 2px;"><b>*EL COSTO DEL FLETE DEBERA SER PAGADO POR ADELANTADO Y ANTES DE LA ENTREGA.</b></td>
      </tr>
    </table> 

    <!-- <script type="text/javascript">
      let total1 = 0;
      let celdascajas = document.querySelectorAll('td + td');
      for(let i = 0; i < celdascajas.length; ++i){
        total1 += parseFloat(celdascajas[i].firstChild.data);
      }
      console.log(total1);
      let nuevaFila = document.createElement('tr');
      let celdaTotal = document.createElement('td');
      let textoCeldaTotal = document.createTextNode('Total: ');
      celdaTotal.appendChild(textoCeldaTotal);
      nuevaFila.appendChild(celdaTotal);
      let celdaValorTotal = document.createElement('td');
      let textoCeldaValorTotal = document.createTextNode(total1);
      celdaValorTotal.appendChild(textoCeldaValorTotal);
      nuevaFila.appendChild(celdaValorTotal);
      document.getElementById('productos').appendChild(nuevaFila);
    </script> -->
</body>
</html>