<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\Servicio;
use App\Models\Serie;
use App\Models\Recoleccion;
use App\Models\EntregaInicio;
use App\Models\EntregaFinal;
use App\Models\ServicioDetalles;
use PDF;


class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$servicios = Servicio::latest()->get();

        return view('servicio.index',
        [
          'servicios' => $servicios
        ]); */
        return view('servicio.index');
    }
    // Tabla de Servicios
    public function datatableServicios()
    {
        $model = Servicio::all();
        $model->each(function($servicio)
        {            
            $servicio->exportador;
            $servicio->agente_ad_exportacion;
            $servicio->importador;
            $servicio->agente_ad_importacion;
            $servicio->serie;
            $servicio->estado;
            $servicio->recolecciones;
            $servicio->recolecciones->empresaTransporte;
            $servicio->cargas;
            $servicio->entregas;
            $servicio->detalle;
            //$servicio->fecha = $servicio->fecha->format('d/m/Y');
        });
        $data = datatables()->of($model)
        ->addColumn('btn', 'servicio.botones')
        ->rawColumns(['btn'])
        ->toJson();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Serie::all();
        return view('servicio.create', [
            'series' => $series,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo($request->fecha_servicio);
        $servicio = Servicio::create([
            'fecha' => $request->fecha_servicio,
            'serie_id' => $request->series,
            'exportador_id' => $request->id_exportador,
            'agente_exportacion_id' => $request->id_ag_ad_exportacion,
            'importador_id' => $request->id_importador,
            'agente_importacion_id' => $request->id_ag_ad_importacion,
        ]);
        $meServicio = Servicio::find($servicio->id);

        $recoleccion = new Recoleccion;
        $recoleccion->fecha = $request->fecha_recoleccion;
        $recoleccion->hora = $request->hora_recoleccion;
        $recoleccion->tipo_transporte = $request->tipo_transporte_recoleccion;
        $recoleccion->emp_transporte_id = $request->id_emp_recolectora;
        //$recoleccion->direccion = $request->dirección_recoleccion;
        $meServicio->recolecciones()->save($recoleccion);

        $entregaInicio = new EntregaInicio;
        $entregaInicio->fecha = $request->fecha_entrega_inicio;
        $entregaInicio->hora = $request->hora_entrega_inicio;
        $entregaInicio->tipo_transporte = $request->tipo_transporte_entrega;
        $entregaInicio->lugar_carga = $request->lugar_carga_entrega;
        $entregaInicio->emp_transporte_id = $request->id_emp_carga;
        $meServicio->cargas()->save($entregaInicio);

        $entregaFinal = new EntregaFinal;
        $entregaFinal->fecha = $request->fecha_entrega_final;
        $entregaFinal->hora = $request->hora_entrega_final;
        $entregaFinal->lugar_entrega = $request->lugar_final_entrega;
        $entregaFinal->emp_transporte_id = $request->id_emp_entrega;
        $meServicio->entregas()->save($entregaFinal);

        $servicioDetalle = new ServicioDetalles;
        $servicioDetalle->nro_pedido_cliente = $request->nro_pedido;
        $servicioDetalle->nro_factura_cliente = $request->nro_factura;
        $servicioDetalle->fecha_factura = $request->fecha_factura;
        $servicioDetalle->valor_mercancia = $request->valor_mercancia;
        $servicioDetalle->peso_neto = $request->peso_mercancia;
        $servicioDetalle->volumen = $request->volumen_mercancia;
        $servicioDetalle->pallets = $request->pallets;
        $servicioDetalle->descripcion_merc_id = $request->id_descrip_merc;
        $servicioDetalle->regimen_aduanero = $request->regimen_aduanero;
        $meServicio->detalle()->save($servicioDetalle);

        toast('Servicio registrado correctamente!','success');
        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        $series = Serie::all();
        return view('servicio.edit', [
            'servicio' => $servicio,
            'series' => $series,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->fecha = $request->fecha_servicio;
        $servicio->serie_id = $request->series;
        $servicio->exportador_id = $request->id_exportador;
        $servicio->agente_exportacion_id = $request->id_ag_ad_exportacion;
        $servicio->importador_id = $request->id_importador;
        $servicio->agente_importacion_id = $request->id_ag_ad_importacion;
        $servicio->save();

        $servicio->recolecciones->update([
                'fecha' => $request->fecha_recoleccion,
                'hora' => $request->hora_recoleccion,
                'tipo_transporte' => $request->tipo_transporte_recoleccion,
                'emp_transporte_id' => $request->id_emp_recolectora,
            ]);
        $servicio->cargas->update([
                'fecha' => $request->fecha_entrega_inicio,
                'hora' => $request->hora_entrega_inicio,
                'tipo_transporte' => $request->tipo_transporte_entrega,
                'lugar_carga' => $request->lugar_carga_entrega,
                'emp_transporte_id' => $request->id_emp_carga,
            ]);
        $servicio->entregas->update([
                'fecha' => $request->fecha_entrega_final,
                'hora' => $request->hora_entrega_final,
                'lugar_entrega' => $request->lugar_final_entrega,
                'emp_transporte_id' => $request->id_emp_entrega,
            ]);
        $servicio->detalle->update([
                'nro_pedido_cliente' => $request->nro_pedido,
                'nro_factura_cliente' => $request->nro_factura,
                'fecha_factura' => $request->fecha_factura,
                'valor_mercancia' => $request->valor_mercancia,
                'peso_neto' => $request->peso_mercancia,
                'volumen' => $request->volumen_mercancia,
                'pallets' => $request->pallets,
                'descripcion_merc_id' => $request->id_descrip_merc,
                //'fraccion_arancelaria' => $request->fraccion_arancelaria,
                'regimen_aduanero' => $request->regimen_aduanero,
            ]);
        toast('Servicio actualizado correctamente!','success');
        return redirect('/servicios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
    }

    public function pdfInstrucciones($id)
    {
        $servicio = Servicio::findOrFail($id);
        $series = Serie::all();
        $pdf = PDF::loadview('pdf.carta_instrucciones', ['servicio' => $servicio, 'series' => $series]);
        return $pdf->stream('Instrucciones_'.$servicio->id.'.pdf');
    }
    public function pdfPorte($id)
    {
        $servicio = Servicio::findOrFail($id);
        $series = Serie::all();
        $pdf = PDF::loadview('pdf.carta_porte', ['servicio' => $servicio, 'series' => $series]);
        return $pdf->stream('Porte_'.$servicio->id.'.pdf');
    }
    public function pdfManifiesto($id)
    {
        $servicio = Servicio::findOrFail($id);
        $series = Serie::all();
        $pdf = PDF::loadview('pdf.carta_manifiesto', ['servicio' => $servicio, 'series' => $series]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('Manifiesto_'.$servicio->id.'.pdf');
    }
}
