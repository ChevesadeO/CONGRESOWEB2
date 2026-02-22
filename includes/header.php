<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Congreso Académico - Facultad</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<!-- NAVEGACIÓN -->
<nav class="navbar navbar-expand-lg fixed-top reveal">
  <div class="container-fluid px-5">

    <a class="navbar-brand d-flex align-items-center fw-bold" href="index.php">
      <img src="assets/img/logo-fisc.png" width="45" class="me-2">
      Facultad de Ingeniería de Sistemas Computacionales - UTP
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="menuNav">
      <ul class="navbar-nav gap-3">
        <li><a class="nav-link" href="index.php">Inicio</a></li>
        <li><a class="nav-link" href="cronograma.php">Cronograma</a></li>
        <li><a class="nav-link" href="inscripcion.php">Inscripción</a></li>
        <li><a class="nav-link" href="galeria.php">Galería</a></li>
      </ul>
    </div>

  </div>
</nav>


<!-- activa el efecto al hacer scroll -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    let links = document.querySelectorAll(".nav-link");
    let currentPage = window.location.pathname.split("/").pop();

    links.forEach(link => {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
      }
    });
  });
</script>

<script>
  window.addEventListener("scroll", function () {
    let navbar = document.querySelector(".navbar");

    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>

<script>
  window.addEventListener("scroll", function () {
    let elements = document.querySelectorAll(".reveal");

    elements.forEach(el => {
      let position = el.getBoundingClientRect().top;
      let screenHeight = window.innerHeight;

      if (position < screenHeight - 100) {
        el.classList.add("active");
      }
    });
  });
</script>


</body>