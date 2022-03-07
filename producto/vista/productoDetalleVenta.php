<?php
    //require_once('../modelo/modeloIndex.php');
    require_once('../modelo/modeloProducto.php');
    //require_once('../../index.php');

    if (isset ($_REQUEST['Id_Producto'])) {
        $modeloProducto = new Producto();
        $Id_Producto = $_REQUEST['Id_Producto'];
        $producto = $modeloProducto->getProducto($Id_Producto);        

        
        //header('Location: ../producto/vista/ProductosCategoria.php');
        //print_r($objmodeloIndex);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/estiloTabla.css" rel="stylesheet">
<!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
<body>
	<header>
		<?php
		require_once('../controlador/controladorProducto.php');
		?>
		<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Electricos cauca</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nuestro negocio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Iniciar sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registrarse</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>
	</header>
	
		<h1>Producto</h1>
<div id="contenedorProducto">
		<table border="1">
			<thead>
				<tr>
					<th>ID Producto</th>
					<th>Nombre_Producto</th>
					<th>Marca_Producto</th>
					<th>Descripcion_Producto</th>
					<th>Valor_unitario_Producto</th>
					<th></th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($producto as $r): ?>
		        <tr>
		            <td><?php echo $r['Id_Producto'];?></td>
					<td><?php echo $r['Nombre_Producto'];?></td>
		            <td><?php echo $r['Marca_Producto'];?></td>
		            <td><?php echo $r['Descripcion_Producto'];?></td>
					<td><?php echo $r['Valor_unitario_Producto'];?></td>
                <td>
		                <a href="../../detalle ventas/vista/detalleVentaProducto.php?Id_Producto=<?php echo $r['Id_Producto'];?>&Nombre_Producto=<?php echo $r['Nombre_Producto'];?>&Marca_Producto=<?php echo $r['Marca_Producto'];?>&Descripcion_Producto=<?php echo $r['Descripcion_Producto'];?>&Valor_unitario_Producto=<?php echo $r['Valor_unitario_Producto'];?>&Iva_Producto=<?php echo $r['Iva_Producto'];?>&Codigo_categoria=<?php echo $r['Codigo_categoria'];?>">Comprar</a>
		            </td>
					
		        </tr>
	    		<?php endforeach; ?>
			</tbody>
		</table>
    </div>   
</body>
</html>