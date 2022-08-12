var boton=document.getElementById('agregar_producto');
var guardar=document.getElementById('guardar_producto');
var lista=document.getElementById('lista');
var data = [];
var cant = 0;
boton.addEventListener("click", agregar_producto);
guardar.addEventListener("click", save);
function agregar_producto(){
	var factura = document.getElementById('producto_factura').value;
	var cajas = parseFloat(document.getElementById('producto_cajas').value);
	var peso = parseFloat(document.getElementById('producto_peso').value);
	var descripcion = document.getElementById('producto_descripcion').value;
	var nrofila = cant+1;
	//var total = cajas*peso;
	//console.log(total);
	//Agregar elemento al array
	data.push(
		{
			"id": cant,
			"factura": factura,
			"cajas": cajas,
			"peso": peso,
			"descripcion": descripcion, 
		}
	);
	var id_row = 'row' + cant;
	var fila = '<tr id=' + id_row + '><td>' + nrofila +'</td><td>' + factura +'</td><td>' + cajas +'</td><td>' + peso +'</td><td>' + descripcion +'</td><td><a href="#" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="eliminar('+ cant +')";><i class="far fa-trash-alt me-2"></i></a></td> </tr>';
	//Agregar a la lista
	$('#lista').append(fila);
	$('#producto_factura').val('');
	$('#producto_cajas').val('');
	$('#producto_peso').val('');
	$('#producto_descripcion').val('');
	$('#producto_factura').focus();
	cant++;
	sumar();
	
}
function save(){
	var json = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: "{{url('/servicios')}}",
		data: "json="+json,
		success: function(resp){
			location.reload();
		}
	})
}
function sumar(){
	var totalcajas = 0;
	var totalpeso = 0;
	for (x of data) {
		totalcajas = totalcajas + x.cajas;
	}
	for (y of data) {
		totalpeso = totalpeso + y.peso;
	}
	document.getElementById('totalcajas').innerHTML =  totalcajas;
	document.getElementById('totalpeso').innerHTML =  totalpeso;
}
function eliminar(row){
	//remover la fila del html
	$("#row"+row).remove();
	var i = 0;
	var pos = 0;
	for(x of data){
		if(x.id==row){
			pos = i;
		}
		i++;
	}
	data.splice(pos, 1);
	sumar();
}