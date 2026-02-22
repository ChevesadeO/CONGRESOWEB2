<?php
include("includes/config.php");
include("includes/header.php");

$mensaje = "";

// Procesar formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $cedula = trim($_POST["cedula"]);
    $carrera = $_POST["carrera"];
    $anio = $_POST["anio"];
    $conferencias = $_POST["conferencias"] ?? [];

    // Validación: mínimo 3 conferencias
    if (count($conferencias) < 3) {
        $mensaje = "<div class='alert alert-danger text-center'>
            Debes seleccionar al menos <strong>3 conferencias</strong>.
        </div>";
    } else {

        $listaConferencias = implode(", ", $conferencias);

        $sql = "INSERT INTO inscripciones 
                (nombre_completo, cedula, carrera, anio, conferencias)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssis", $nombre, $cedula, $carrera, $anio, $listaConferencias);

        if ($stmt->execute()) {
            $mensaje = "<div class='alert alert-success text-center'>
                🎉 Inscripción realizada con éxito. ¡Te esperamos en el Congreso!
            </div>";
        } else {
            $mensaje = "<div class='alert alert-danger text-center'>
                Error al registrar: " . $conn->error . "
            </div>";
        }
    }
}
?>


<!-- ✅ BANNER SUPERIOR -->
<section class="page-banner fade-up">
  <div class="container text-center">
    <h1 class="fw-bold mb-2">📝 Formulario de Inscripción</h1>
    <p class="lead mb-0">
      Completa tus datos para participar en el Congreso Académico.
      Selecciona mínimo <strong>3 conferencias</strong>.
    </p>
    <p class="small text-muted mt-2">
  Conferencias seleccionadas:
  <span id="contador" class="fw-bold text-success">0</span>/3 mínimo
</p>
  </div>
</section>


<!-- ✅ SECCIÓN FORMULARIO -->
<section class="form-section">

  <div class="container">

    <!-- Mensaje -->
    <?php echo $mensaje; ?>

    <!-- Card Formulario -->
    <div class="card form-card border-0 p-5 mx-auto fade-up">

      <form method="POST">

        <!-- Nombre -->
            <div class="mb-4">
        <label class="form-label fw-semibold">Nombre completo</label>

        <div class="input-group">
          <span class="input-group-text">
            <i class="bi bi-person-fill"></i>
          </span>
          <input type="text" name="nombre" class="form-control" required>
        </div>
      </div>


        <!-- Cédula -->
        <div class="mb-4">
        <label class="form-label fw-semibold">Cédula</label>

        <div class="input-group">
          <span class="input-group-text">
            <i class="bi bi-credit-card-2-front-fill"></i>
          </span>
          <input type="text" name="cedula" class="form-control" required>
        </div>
      </div>


        <!-- Carrera -->
        <div class="mb-4">
  <label class="form-label fw-semibold">Carrera</label>

          <div class="input-group">
            <span class="input-group-text">
              <i class="bi bi-mortarboard-fill"></i>
            </span>

            <select name="carrera" class="form-select" required>
              <option value="">-- Selecciona --</option>
              <option>Licenciatura en Redes Informáticas</option>
              <option>Licenciatura en Desarrollo y Gestión de Software</option>
            </select>
          </div>
        </div>

        <!-- Año -->
        <div class="mb-4">
          <label class="form-label fw-semibold">Año que cursa</label>

          <div class="input-group">
            <span class="input-group-text">
              <i class="bi bi-bar-chart-fill"></i>
            </span>
            <input type="number" name="anio" class="form-control" min="1" max="5" required>
          </div>
        </div>

        <!-- Conferencias -->
        <div class="mb-4">
          <label class="form-label fw-semibold">
            Selecciona mínimo 3 conferencias:
          </label>

          <?php
          $lista = [
            "Inteligencia Artificial",
            "Ciberseguridad y Redes",
            "Desarrollo Web Full Stack",
            "Bases de Datos Modernas"
          ];

          foreach ($lista as $conf) {
            echo "
            <div class='form-check'>
              <input class='form-check-input' type='checkbox' name='conferencias[]' value='$conf'>
              <label class='form-check-label'>$conf</label>
            </div>
            ";
          }
          ?>
        </div>

        <!-- Botón -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success btn-lg fw-bold">
            Enviar Inscripción
          </button>
        </div>

      </form>

    </div>

  </div>
</section>

<!-- LLAMMA A CONTADOR DE CONFERENCIAS SELECCIONADAS -->
 <script src="assets/js/contador.js"></script>



<?php include("includes/footer.php"); ?>
