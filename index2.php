<?php
//require_once('Proyecto_Ev/index/controlador/controladorIndexCategoria.php');
require_once('index/controlador/controladorIndexCategoria.php');
//require_once('Conexion.php');
require_once('index/controlador/modeloIndex.php');

/* $modeloIndex = new Index();
$Categorias = $modeloIndex->listarCategorias(); */
//$Id_categoria = $_GET['']
//$objProductoCategoria = $modeloIndex->verProductoCategoria($Id_categoria);

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../Proyecto_Ev/index/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../Proyecto_Ev/index/bootstrap/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
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
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nuestro negocio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Proyecto_Ev/user inicio sesion/vista/login2.php">Iniciar sesion</a>
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

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Bienvenidos a Electricos Cauca.</h1>
            <p>te damos la bienvenida a nuestra tienda virtual.</p>
            <p><a class="btn btn-lg btn-primary" href="#">vamos!</a></p>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
  <div class="row">
      

    <!-- Three columns of text below the carousel //cambiar el foreach por el productocategoria y luego codigo del producto --> 
    <?php foreach($Categorias as $Categoria): ?>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> <br>
		            <?php echo  "<h2> ". $Categoria['Nombre_categoria'];  "</h2>" ?>
		            <?php echo "<p> ". $Categoria['Descripcion_Categoria']; "</p> "?>
                	            
        <p><a class="btn btn-secondary" name="btnProductos" href="../Proyecto_Ev/index/controlador/ProductosCategoria.php?Codigo_Categoria=<?php echo $Categoria['Codigo_Categoria'];?>">Ver Productos &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <?php endforeach; ?>
  <div>
      
        

        

        


 

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../Proyecto_Ev/index/bootstrap/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
