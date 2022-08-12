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
  	<b style="margin-left: 450 px"> {{ $servicio->serie->serie }}-{{$servicio->id}} </b>
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
  			<td style="padding-left: 30px"> {{ isset($servicio->recolecciones->empresaTransporte['nombre']) ? $servicio->recolecciones->empresaTransporte['nombre']: old('empresa_recolectora') }} </td> 
  		</tr>
  		<tr>
  			<td width="100">DIRECCION: </td>
  			<td style="padding-left: 30px" colspan="6"> {{ isset($servicio->recolecciones->empresaTransporte['domicilio']) ? $servicio->recolecciones->empresaTransporte['domicilio']: old('domicilio_recoleccion') }} </td> 
  		</tr>
      <tr>
        <td width="100">CONTACTO: </td>
        <td style="padding-left: 30px" colspan="2"> {{ isset($servicio->recolecciones->empresaTransporte['contacto']) ? $servicio->recolecciones->empresaTransporte['contacto']: old('contacto_recoleccion') }}</td> 
        <td width="50">TELEFONO: </td>
        <td >{{ isset($servicio->recolecciones->empresaTransporte['telefono']) ? $servicio->recolecciones->empresaTransporte['telefono']: old('telefono_recoleccion') }}</td> 
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
        <td style="padding-left: 30px"> {{ isset($servicio->cargas->empresaTransporte['nombre']) ? $servicio->cargas->empresaTransporte['nombre']: old('empresa_carga') }} </td> 
      </tr>
      <tr>
        <td width="100">DIRECCION: </td>
        <td style="padding-left: 30px" colspan="6"> {{ isset($servicio->cargas->empresaTransporte['domicilio']) ? $servicio->cargas->empresaTransporte['domicilio']: old('direccion_emp_carga') }} </td> 
      </tr>
      <tr>
        <td width="100">CONTACTO: </td>
        <td style="padding-left: 30px" colspan="2" > {{ isset($servicio->cargas->empresaTransporte['contacto']) ? $servicio->cargas->empresaTransporte['contacto']: old('contacto_emp_carga') }}</td> 

        <td width="50">TELEFONO: </td>
        <td > {{ isset($servicio->cargas->empresaTransporte['telefono']) ? $servicio->cargas->empresaTransporte['telefono']: old('telefono_emp_carga') }}</td> 
      </tr>
    </table> 
<hr>
<table width="100%" cellpadding="0" cellspacing="0">
  
      <tr >
        <td > <b>EXPORTADOR:</b>  </td>
        <td style="padding-left: 30px;" colspan="6" > <b> {{ isset($servicio->exportador->nombre) ? $servicio->exportador->nombre: old('nombre_exportador') }}</b> </td>
      </tr>
      <tr>
        <td>RFC: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->exportador->rfc) ? $servicio->exportador->rfc: old('rfc_exportador') }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ isset($servicio->exportador->domicilio) ? $servicio->exportador->domicilio: old('domicilio_exportador') }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" >{{ isset($servicio->exportador->contacto) ? $servicio->exportador->contacto: old('contacto_exportador') }}</td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->exportador->telefono) ? $servicio->exportador->telefono: old('telefono_exportador') }}</td>
      </tr>


      <tr >
        <td style="padding-top: 5px;"> <b>AGENTE ADUANAL DE EXPORTACION:</b>  </td>
        <td style="padding-left: 30px; padding-top: 5px" colspan="6" >  {{ isset($servicio->agente_ad_exportacion->nombre) ? $servicio->agente_ad_exportacion->nombre: old('nombre_ag_ad_exportacion') }} </td>
      </tr>
      <tr>
        <td>NIT: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->agente_ad_exportacion->nit) ? $servicio->agente_ad_exportacion->nit: old('nit_ag_ad_exportacion') }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ isset($servicio->agente_ad_exportacion->domicilio) ? $servicio->agente_ad_exportacion->domicilio: old('domicilio_ag_ad_exportacion') }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ isset($servicio->agente_ad_exportacion->contacto) ? $servicio->agente_ad_exportacion->contacto: old('contacto_ag_ad_exportacion') }} </td> 

        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->agente_ad_exportacion->telefono) ? $servicio->agente_ad_exportacion->telefono: old('telefono_ag_ad_exportacion') }} </td>
      </tr>


      <tr >
        <td style="padding-top: 5px;"> <b>IMPORTADOR:</b>  </td>
        <td style="padding-left: 30px; padding-top: 5px" colspan="6" > {{ isset($servicio->importador->nombre) ? $servicio->importador->nombre: old('nombre_importador') }} </td>
      </tr>
      <tr>
        <td>NIT: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->importador->nit) ? $servicio->importador->nit: old('nit_importador') }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ isset($servicio->importador->domicilio) ? $servicio->importador->domicilio: old('domicilio_importador') }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ isset($servicio->importador->contacto) ? $servicio->importador->contacto: old('contacto_importador') }} </td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->importador->telefono) ? $servicio->importador->telefono: old('telefono_importador') }} </td>
      </tr>


      <tr >
        <td style="padding-top: 5px;"> <b>AGENTE ADUANAL DE IMPORTACION:</b>  </td>
        <td style="padding-left: 30px; padding-top: 5px" colspan="6" > {{ isset($servicio->agente_ad_importacion->nombre) ? $servicio->agente_ad_importacion->nombre: old('nombre_ag_ad_importacion') }} </td>
      </tr>
      <tr>
        <td>NIT: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->agente_ad_importacion->nit) ? $servicio->agente_ad_importacion->nit: old('nit_ag_ad_importacion') }} </td> 
      </tr>
      <tr>
        <td>DOMICILIO: </td>
        <td style="padding-left: 30px" colspan="5"> {{ isset($servicio->agente_ad_importacion->domicilio) ? $servicio->agente_ad_importacion->domicilio: old('domicilio_ag_ad_importacion') }} </td> 
      </tr>
      <tr>
        <td>CONTACTO: </td>
        <td style="padding-left: 30px" > {{ isset($servicio->agente_ad_importacion->contacto) ? $servicio->agente_ad_importacion->contacto: old('contacto_ag_ad_importacion') }} </td> 
        <td>TELEFONO: </td>
        <td style="padding-left: 30px"> {{ isset($servicio->agente_ad_importacion->telefono) ? $servicio->agente_ad_importacion->telefono: old('telefono_ag_ad_importacion') }} </td>
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
        <td style="padding-left: 30px"> {{ isset($servicio->entregas->empresaTransporte['nombre']) ? $servicio->entregas->empresaTransporte['nombre']: old('empresa_final') }} </td> 
      </tr>
       <tr>
        <td width="100">CONTACTO: </td>
        <td style="padding-left: 30px" colspan="2" > {{ isset($servicio->entregas->empresaTransporte['contacto']) ? $servicio->entregas->empresaTransporte['contacto']: old('contacto_emp_final') }} </td> 
        <td width="50">TELEFONO: </td>
        <td > {{ isset($servicio->entregas->empresaTransporte['telefono']) ? $servicio->entregas->empresaTransporte['telefono']: old('telefono_emp_final') }} </td> 
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
      <td colspan="3"> {{ isset($servicio->detalle->desc_mercaderia['descripcion_mercaderia']) ? $servicio->detalle->desc_mercaderia['descripcion_mercaderia']: old('descripcion_mercancia') }} </td>
    </tr>
    <tr>
      <td width="150">FRACCIÓN ARANCELARIA: </td>
      <td> {{ isset($servicio->detalle->desc_mercaderia['fraccion_arancelaria']) ? $servicio->detalle->desc_mercaderia['fraccion_arancelaria']: old('fraccion_arancelaria') }} </td>
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
