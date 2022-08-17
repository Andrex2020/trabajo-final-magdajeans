<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="./Estilos/stylecatalogo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
           integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="./Java/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz@6..96&family=Montserrat:wght@200&display=swap" rel="stylesheet">

</head>
<body>
<!-- Barra de Navegación-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./Imagenes Logo/Logobarra-removebg.png" width="160px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes.html">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.html">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Registrate</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
        <input type="number" name="numero" placeholder="Numero">
    	<input type="email" name="email" placeholder="Email">
        <input type="text" name="direccion" placeholder="Dirección">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>

<br><br><br><br>
<br><br><br><br>

<div class="elcarrete">
  <br><br>
  <h2 class="titulojeans"> Redes Sociales </h2>
  <br><br><br>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <img src="./Imagenes Logo/instalogo.png" width="200px">
      <h3>Siguenos en Instagram</h3>
      <div class="d-grid gap-2 col-6 mx-auto">
          <a href="https://www.instagram.com/?hl=es-la" class= "btn btn-outline-light" type="button">¡Seguir!</button></a>
        </div>
    </div>
    <br>
    <div class="col">
      <img src="./Imagenes Logo/facelogo.png" width="110px">
      <h3>Siguenos en Facebook</h3>
      <div class="d-grid gap-2 col-6 mx-auto">
          <a href="https://www.facebook.com/" class= "btn btn-outline-light" type="button">¡Seguir!</button></a>
        </div>
    </div>
    <br>
    <div class="col">
      <img src="./Imagenes Logo/whalogo.png" width="110px">
      <h3>Escribenos</h3>
      <div class="d-grid gap-2 col-6 mx-auto">
          <a href="https://wa.me/+573115017465" class= "btn btn-outline-light" type="button">¡Escribir!</button></a>
        </div>
    </div>
  </div>
</div>
</div>

<!-- Pie de Pagina -->    
<div class="finalpagina">  
    <footer>
      
    <ul>
    <li> tiendaenlinea@magdajeansbogota.com.co</li>
    <li> Whatsapp:(57)3115017465</li>
    <li> Cl. 38A Sur # 34d-51, Bogotá</li>
    <li> ©2022 MagdaJeans Todos los derechos reservados.</li>
    <br><br>
    </ul>
    </footer>
    </div> 
</body>
</html>