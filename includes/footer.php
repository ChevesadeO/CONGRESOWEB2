<?php
//footer global para incluir en todas las páginas, contiene el cierre de body y html, además del footer
?>

<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="conteiner">

    <div class="row">

    <!informacion del congreso>
    <div class="col-med-6 mb-4">
        <h5 class="fw-bold"> Congreso Academico Facultad de Ingenieria en Sistemas Computacionales</h5>
        <p class="text-white-50>
        Evento universitario dedicado a la innovación, tecnología y desarrollo académico.
        </p>
      </div>

      <!-- Links rápidos -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Enlaces</h6>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-white-50 text-decoration-none">Inicio</a></li>
          <li><a href="cronograma.php" class="text-white-50 text-decoration-none">Cronograma</a></li>
          <li><a href="galeria.php" class="text-white-50 text-decoration-none">Galería</a></li>
          <li><a href="inscripcion.php" class="text-white-50 text-decoration-none">Inscripción</a></li>
        </ul>
      </div>

      <!-- Contacto -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Contacto</h6>
        <p class="text-white-50 mb-1">📍 Universidad Tecnológica de Panamá</p>
        <p class="text-white-50 mb-1">📧 congreso@utp.ac.pa</p>
      </div>

    </div>

    <hr class="border-secondary">

    <div class="text-center text-white-50">
      © <?php echo date("Y"); ?> Congreso FISC - Desarrollado por <strong>CO/JO</strong>
    </div>

  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS propio -->
<script src="assets/js/main.js"></script>

</body>
</html>


</footer>