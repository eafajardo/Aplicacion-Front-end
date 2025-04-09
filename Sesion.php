<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECZD - Tienda de Tecnología</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="Sesion_1.css">
</head>
<body class="body1">
  
  <!-- Header con logo, búsqueda, registro y usuario/carrito -->
<div class="header">
    <div class="logo">
      <img src="img/Logo_ECZD.png" alt="logo">
    </div>

    <div class="search-bar">
      <i class="fa-solid fa-bars"></i>
      <input type="text" placeholder="Buscar">
      <i class="fa-solid fa-search"></i>
    </div>

    <div class="icons"> 
        <a href="perfil.html"><i class="fa-solid fa-user"></i></a>
        <a href="carrito.html"><i class="fa-solid fa-cart-shopping"></i></a>
    </div>
</div>
  <!-- Sección 2: navbar -->
  <section class="section_2">
    <header class="header1">
      <nav class="navbar">
        <a href="http://localhost/Proyecto_edwin/">INICIO</a>
      </nav>
    </header>
  </section>


  <!-- Seccion 3-->
    <section class="form-login">
    <h5>Formulario inicio de sesion</h5>
    <form action="../../../App/Controlador/LoginController.php" method="POST">
      <input class="controles" type="text" name="usuario" placeholder="Usuario" required>
      <input class="controles" type="password" name="contrasena" placeholder="Contraseña" required>
      <input class="botones" type="submit" value="Ingresar">
    </form>
    <p><a href="#">¿Olvidaste tu contraseña?</a></p>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <br>
  <br>
    <br>
    <br>
    <br>