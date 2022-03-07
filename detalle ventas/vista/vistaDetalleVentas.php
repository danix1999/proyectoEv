<?php
    require_once('../modelo/modeloDetalleVentas.php');
    


echo 'Compra realizada satisfactoriamente';
$modeloDetalleVentaProducto = new DetalleVenta;
$verDetalle=$modeloDetalleVentaProducto->listVenta();

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="../../index2.php">
<table border="1">
			<thead>
				<tr>
					<th>codigo_venta</th>
					<th>descripcion</th>
					<th>cantidad</th>
					<th>precio</th>
					<th>descuento</th>
					<th>id_producto</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($verDetalle as $r): ?>
		        <tr>
		            <td><?php echo $r['codigo_venta'];?></td>
					<td><?php echo $r['descripcion'];?></td>
		            <td><?php echo $r['cantidad'];?></td>
                    <td><?php echo $r['precio'];?></td>
                    <td><?php echo $r['descuento'];?></td>
                    <td><?php echo $r['id_producto'];?></td>
                
					
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>

<button type="submit">cerrar sesion</button>
</form>
</body>
</html>
