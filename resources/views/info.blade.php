<head>
 <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
 </head>
 <body>

<div >
  <table id="mitabla" border="1" class=" display table display table-striped">


  <thead>
  <tr>
  <th>Check</th>
  <th>Codigo</th>
  <th>Articulo</th>
  <th>Precio</th>
  <th>Cantidad</th>
  <th>Presentacion</th>
  </tr>
  </thead>
<tbody>
  
  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO001</td>
  <td>Mantequilla</td>
  <td>12.5</td>
  <td><input type="number" value="1" /></td>
  <td>En paquete</td>
  </tr>

  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO002</td>
  <td>Yogurt</td>
  <td>5.60</td>
  <td><input type="number" value="1" /></td>
  <td>En botella</td>
  </tr>

  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO003</td>
  <td>Gaseosa</td>
  <td>3.50</td>
 <td><input type="number" value="1" /></td>
  <td>En botella</td>
  </tr>

  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO004</td>
  <td>Pul</td>
  <td>3.50</td>
 <td><input type="number" value="1" /></td>
  <td>En botella</td>
  </tr>

  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO005</td>
  <td>Jamonada</td>
  <td>2.10</td>
  <td><input type="number" value="1" /></td>
  <td>En paquete</td>
  </tr>
  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO003</td>
  <td>Gaseosa</td>
  <td>3.50</td>
  <td><input type="number" class="monto" value="1"  onchange="sumar();" /></td>
  <td>En botella</td>
  </tr>

  <tr>
  <td class="check"><input name="" type="checkbox"></td>
  <td>PRO004</td>
  <td>Pul</td>
  <td>3.50</td>
  <td><input type="number" class="monto" value="1" onchange="sumar();" /></td>
  <td>En botella</td>
  </tr>
  
 </tbody>
  

  </table>
  <span>El resultado es: </span> <span id="spTotal"></span>
</div>

	<button id="enviar">Enviar</button>
</body>
 
 <script>
  
  function sumar() {

  var total = 0;

  $(".monto").each(function() {

    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {

      total += parseFloat($(this).val());

    }

  });

  //alert(total);
  document.getElementById('spTotal').innerHTML = total;

	}
  </script>