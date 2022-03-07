<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Electricauca </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/starter-template.css" rel="stylesheet">
    <link href="bootstrap/css/footers.css" rel="stylesheet">
  </head>
  <body>
      
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-10 mb-0 text-muted">&copy; 2022 Electricos Cauca, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    
        <ul class="nav col-md-5 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Nosotros</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Nuestro Negocio</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Registrar</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Iniciar Sesion</a></li>
        </ul>
      </footer>
    </div>
    
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
      <span class="fs-4">Electricauca</span>
    </a>
  </header>

  <main>
    <h1>Bienvenidos a Electricos Cauca</h1>
    <p class="fs-5 col-md-12">Encontraras todo lo referido a tecnologia en nuestra tienda virtual. que esperas para comprar tu producto preferido?</p>

    <div class="mb-5">
      <a href="../examples/" class="btn btn-primary btn-lg px-4">Nuestro Negocio</a>
    </div>

    <hr class="col-2 col-md-2 mb-3">

      <div class="col-md-2">
        <h2>lista</h2>
        <p>lista de productos</p>
        <header>
		      <?php
		        require_once('../Proyecto_Ev/index/controlador/controladorIndex.php');
		      ?>
	      </header>

        <table border="1">
			<thead>
				<tr>
					<th>producto</th>
					<th>marca</th>
					<th>descripcion</th>
				</tr>
			</thead>
      <tbody>
				<!--
					Agregamos un foreach para recorrer los proveedores y los incrustamos en las celdas de la tabla
				-->
				<?php foreach($Index as $r): ?>
		        <tr>
		            <td><?php echo $r['Nombre_Producto'];?></td> 
		            <td><?php echo $r['Marca_Producto'];?></td>
		            <td><?php echo $r['Descripcion_Producto'];?></td>
        <?php endforeach; ?>        
        </ul>
        </tbody>
        </table> 
      </div>
      
    </div>
  </main>
  </footer>
</div>


    <script src="../Proyecto_Ev/index/bootstrap/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
