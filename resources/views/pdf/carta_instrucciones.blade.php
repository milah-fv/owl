<!doctype html>
<html lang="en">
  <head>
    <title>Carta de Instrucciones N° {{$servicio->id}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link id="pagestyle" href="{{ public_path('app_assets/css/pdf.css') }}" rel="stylesheet" />

</head>
  <body>
  	<header>
  		<img height="50px"  src="{{public_path('app_assets/img/cabecera_pdf.png')}}">
  	</header>
  	
  	<b>Fecha:</b> Mexico - {{ date('d-m-Y', strtotime($servicio->fecha)) }}
  	<b style="margin-left: 350 px ">Codigo:</b> {{ $servicio->codigo }}
  	<br>
  	Sirvase a atender la siguiente:
  	<h4 style="text-align: center; font-size:9; margin-bottom: 0px; margin-top: 0;">CARTA DE INSTRUCCIONES</h4>
    
     <!--Recoleccion-->
    <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style="border: 1px solid black; background-color: #e6e6e6; text-align: center;"><b>RECOLECCION</b></td>
      </tr>
    </table>  
  	<table width="100%" cellpadding="0" cellspacing="0">
  		<tr>
  			<td width="100">FECHA Y HORARIO: </td>
  			<td style="padding-left: 30px;"  width="70" > <b>{{ date('d-m-Y', strtotime($servicio->recolecciones->fecha)) }}  </b> </td>
  			<!-- <td style="text-align: center" > -  -->
  			<td width="50"> <b> {{ $servicio->recolecciones->hora }} </b> </td>
  		</tr>
  		<tr>
  			<td width="100">TIPO DE TRANSPORTE: </td>
  			<td style="padding-left: 30px"> {{ $servicio->recolecciones->tipo_transporte }} </td> 
  		</tr>
  		<tr>
  			<td width="100">NOMBRE DE LA EMPRESA: </td>
  			<td style="padding-left: 30px"> {{ $servicio->recolecciones->empresaTransporte['nombre'] }} </td> 
  		</tr>
  		<tr>
  			<td width="100">DIRECCION: </td>
  			<td style="padding-left: 30px" colspan="6"> {{ $servicio->recolecciones->empresaTransporte['domicilio'] }} </td> 
  		</tr>
      <tr>
        <td width="100">CONTACTO: </td>
        <td style="padding-left: 30px" colspan="2"> {{ $servicio->recolecciones->empresaTransporte['contacto'] }} </td> 
        <td width="50">TELEFONO: </td>
        <td > {{ $servicio->recolecciones->empresaTransporte['telefono'] }} </td> 
      </tr>
    </table>  

    <!--Entrega-->
    <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style="border: 1px solid black; background-color: #e6e6e6; text-align: center;"><b>ENTREGA</b></td>
      </tr>
    </table>  
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100" >FECHA Y HORARIO: </td>
        <td style="padding-left: 30px;" width="70" > <b>{{ date('d-m-Y', strtotime($servicio->cargas->fecha)) }} </b> </td>
        <!-- <td style="text-align: center" > -  -->
        <td width="50"> <b> {{ $servicio->cargas->hora }} </b> </td>
      </tr>
      <tr>
        <td width="100">TIPO DE TRANSPORTE: </td>
        <td style="padding-left: 30px"> {{ $servicio->cargas->tipo_transporte }} </td> 
      </tr>
      <tr>
        <td width="100">NOMBRE DE LA EMPRESA: </td>
        <td style="padding-left: 30px"> {{ $servicio->cargas->empresaTransporte['nombre'] }} </td> 
      </tr>
      <tr>
        <td width="100">DIRECCION: </td>
        <td style="padding-left: 30px" colspan="6"> {{ $servicio->cargas->empresaTransporte['domicilio'] }} </td> 
      </tr>
      <tr>
        <td width="100">CONTACTO: </td>
        <td style="padding-left: 30px" colspan="2" > {{ $servicio->cargas->empresaTransporte['contacto'] }} </td> 
        <td width="50">TELEFONO: </td>
        <td > {{ $servicio->cargas->empresaTransporte['telefono'] }} </td> 
      </tr>
    </table> 
<hr>
<table width="100%" cellpadding="0" cellspacing="0">
  
      <tr >
        <td > <b>EXPORTADOR:</b>  </td>
        <td style="padding-left: 30px;" colspan="6" > <b> {{ $servicio->exportador->nombre }} </b> </td>
      </tr>
      <tr>
        <td>RFC: </td>
        <td style="padding-left: 30px"> {{ $servicio->exportador->rfc }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ $servicio->exportador->domicilio }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ $servicio->exportador->contacto }} </td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ $servicio->exportador->telefono }} </td>
      </tr>


      <tr >
        <td style="padding-top: 5px;"> <b>AGENTE ADUANAL DE EXPORTACION:</b>  </td>
        <td style="padding-left: 30px; padding-top: 5px" colspan="6" >  {{ $servicio->agente_ad_exportacion->nombre }}  </td>
      </tr>
      <tr>
        <td>NIT: </td>
        <td style="padding-left: 30px"> {{ $servicio->agente_ad_exportacion->nit }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ $servicio->agente_ad_exportacion->domicilio }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ $servicio->agente_ad_exportacion->contacto }} </td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ $servicio->agente_ad_exportacion->telefono }} </td>
      </tr>


      <tr >
        <td style="padding-top: 5px;"> <b>IMPORTADOR:</b>  </td>
        <td style="padding-left: 30px; padding-top: 5px" colspan="6" >  {{ $servicio->importador->nombre }}  </td>
      </tr>
      <tr>
        <td>NIT: </td>
        <td style="padding-left: 30px"> {{ $servicio->importador->nit }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ $servicio->importador->domicilio }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ $servicio->importador->contacto }} </td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ $servicio->importador->telefono }} </td>
      </tr>


      <tr >
        <td style="padding-top: 5px;"> <b>AGENTE ADUANAL DE IMPORTACION:</b>  </td>
        <td style="padding-left: 30px; padding-top: 5px" colspan="6" >  {{ $servicio->agente_ad_importacion->nombre }}  </td>
      </tr>
      <tr>
        <td>NIT: </td>
        <td style="padding-left: 30px"> {{ $servicio->agente_ad_importacion->nit }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ $servicio->agente_ad_importacion->domicilio }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ $servicio->agente_ad_importacion->contacto }} </td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ $servicio->agente_ad_importacion->telefono }} </td>
      </tr>
</table>
  <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
      <tr>
       <td width="100%" style="border: 1px solid black; background-color: #e6e6e6; text-align: center;"><b>ENTREGA FINAL</b></td>
      </tr>
    </table> 
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100" >FECHA Y HORARIO: </td>
        <td style="padding-left: 30px;" width="70" > <b>{{ date('d-m-Y', strtotime($servicio->entregas->fecha)) }} </b> </td>
        <!-- <td style="text-align: center" > -  -->
        <td width="50"> <b> {{ $servicio->entregas->hora }} </b> </td>
      </tr>
      <tr>
        <td width="100">NOMBRE DE LA EMPRESA: </td>
        <td style="padding-left: 30px"> {{ $servicio->entregas->empresaTransporte['nombre'] }} </td> 
      </tr>
       <tr>
        <td width="100">CONTACTO: </td>
        <td style="padding-left: 30px" colspan="2" > {{ $servicio->entregas->empresaTransporte['contacto'] }} </td> 
        <td width="50">TELEFONO: </td>
        <td > {{ $servicio->entregas->empresaTransporte['telefono'] }} </td> 
      </tr>
      <tr>
        <td width="100">LUGAR DE ENTREGA: </td>
        <td style="padding-left: 30px" colspan="6"> {{ $servicio->entregas->lugar_entrega }} </td> 
      </tr>
     
    </table> 
    <hr>
  <table height=60 width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td width="150" style="color: red;"> NRO DE PEDIDO DEL CLIENTE: </td>
      <td colspan="3">{{ $servicio->detalle->nro_pedido_cliente }} </td>
    </tr>
    <tr>
      <td width="150" style="color: red;">NRO DE FACTURA: </td>
      <td>{{ $servicio->detalle->nro_factura_cliente }}</td>
      <td width="100" style="color: red;">FECHA FACTURA: </td>
      <td>{{ date('d-m-Y', strtotime($servicio->detalle->fecha_factura)) }}</td>
    </tr>
    <tr>
      <td width="150">VALOR DE LA MERCANCIA: </td>
      <td>{{ $servicio->detalle->valor_mercancia }}</td>
      <td width="100">PESO NETO: </td>
      <td>{{ $servicio->detalle->peso_neto }}</td>
    </tr>
    <tr>
      <td width="150"> DESCRIPCIÓN DE LA MERCADERÍA: </td>
      <td colspan="3">{{ $servicio->detalle->desc_mercaderia['descripcion_mercaderia'] }} </td>
    </tr>
    <tr>
      <td width="150">FRACCIÓN ARANCELARIA: </td>
      <td>{{ $servicio->detalle->desc_mercaderia['fraccion_arancelaria'] }}</td>
      <td width="100">REGIMEN ADUANERO: </td>
      <td>{{ $servicio->detalle->regimen_aduanero }}</td>
    </tr>
    <tr>
      <td width="150">PALLETS: </td>
      <td>{{ $servicio->detalle->pallets }}</td>
      <td width="100">VOLUMEN: </td>
      <td>{{ $servicio->detalle->volumen }}</td>
    </tr>
  </table>
  <!--Título-->
  <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
    <tr>
     <td width="100%" style="border: 1px solid black; background-color: #e6e6e6; text-align: center;"><b>FACTURAR</b></td>
    </tr>
  </table>
  <!--Facturar-->
  <table height=60 width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td>RAZON SOCIAL: </td>
      <td colspan="3">One Way Logística Internacional, S.A de C.V.</td>
    </tr>
    <tr>
      <td>RFC: </td>
      <td>OWL151114BD0</td>
    </tr>
     <tr>
      <td>DOMICILIO: </td>
      <td colspan="5">Hacienda Redención 33 B 2do Piso, Col. La Providencia, Metepec, Edo. de México, México. Cp.52177</td>
    </tr>
    <tr>
      <td width="70">CONTACTO: </td>
      <td width="100">LIC. ADELINA RUIZ</td>
      <td width="60">TELEFONO: </td>
      <td>+52 722 369 2430</td>
      <td>CORREO: </td>
      <td>recepcion.facturas@owlogistica.com</td>
    </tr>
  </table>
<!--Título Instrucciones-->
  <table height=60 width="100%" cellpadding="0" cellspacing="0" style="margin-top: 5px;">
    <tr>
     <td width="100%" style="border: 1px solid black; background-color: #e6e6e6; text-align: center;"><b>INSTRUCCIONES ESPECIALES DE EMBARQUE</b></td>
    </tr>
  </table>
    <!--Instrucciones-->
  <table height=60 width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td>PRESENTAR ESTA CARTA EN ORIGEN Y DESTINO, FAVOR DE ENVIAR FIRMADA Y SELLADA COMO EVIDENCIA DE ENTREGA</td>
    </tr>
    <tr>
      <td>LLEVAR EQUIPO DE SEGUIDAD, CASCO, BOTAS, CHALECO, FAJA, LENTES</td>
    </tr>
    <tr>
      <td>LLEVAR EQUIPO DE PROTECCION PERSONAL: CUBREBOCAS, LENTES Y/O CARETA , GEL ANTIBACTERIAL</td>
    </tr>
  </table>

  </body>
</html>
