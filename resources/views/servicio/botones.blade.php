<a href='{{ url("/servicios/$id/edit") }}'  style="margin: 0px 10px" title="Editar"> <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i> </a>
<a target="_blank" href= '{{ url("servicios/instrucciones/pdf/$id") }}' title="Generar Carta de Instrucciones" class="text-info"> <i class="far fa-file-alt me-2"></i> </a>
<a target="_blank" href= '{{ url("/servicios/porte/pdf/$id") }}' title="Generar Carta Porte" class="text-success"> <i class="far fa-file-alt me-2"></i> </a>
<a target="_blank" href= '{{ url("/servicios/manifiesto/pdf/$id") }}' title="Generar Manifiesto" class="text-warning"> <i class="far fa-file-alt me-2"></i> </a>
