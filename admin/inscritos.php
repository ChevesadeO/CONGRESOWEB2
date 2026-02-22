<?php
include("auth.php");
include("../includes/config.php");
include("../includes/header.php");
?>

<div class="container py-5">

  <h2 class="fw-bold text-center mb-4">
    👨‍💼 Panel de Administración
  </h2>

  <p class="text-center text-muted mb-5">
    Lista de estudiantes inscritos en el Congreso Académico.
  </p>

  <div class="text-end mb-3">
  <a href="logout.php" class="btn btn-dark">
    🚪 Cerrar sesión
  </a>
</div>

  <!-- BOTÓN PDF (lo programamos en el siguiente paso) -->
  <div class="text-end mb-3">
    <a href="exportar_pdf.php" class="btn btn-danger fw-bold">
      📄 Exportar a PDF
    </a>
  </div>

  <!-- TABLA INSCRITOS -->
  <div class="card shadow-lg border-0">
    <div class="card-body">

      <table class="table table-striped table-hover align-middle">
        <thead class="table-primary">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Carrera</th>
            <th>Año</th>
            <th>Conferencias</th>
            <th>Fecha Registro</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM inscripciones ORDER BY fecha_registro DESC";
          $resultado = $conn->query($sql);

          if ($resultado->num_rows > 0) {

              while ($fila = $resultado->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $fila["id"] . "</td>";
                  echo "<td>" . $fila["nombre_completo"] . "</td>";
                  echo "<td>" . $fila["cedula"] . "</td>";
                  echo "<td>" . $fila["carrera"] . "</td>";
                  echo "<td>" . $fila["anio"] . "</td>";
                  echo "<td>" . $fila["conferencias"] . "</td>";
                  echo "<td>" . $fila["fecha_registro"] . "</td>";
                  echo "</tr>";
              }

          } else {
              echo "<tr>";
              echo "<td colspan='6' class='text-center text-muted'>";
              echo "No hay inscripciones registradas todavía.";
              echo "</td>";
              echo "</tr>";
          }
          ?>
        </tbody>

      </table>

    </div>
  </div>

</div>

<?php include("../includes/footer.php"); ?>
