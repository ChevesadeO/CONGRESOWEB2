<?php
session_start();

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    // Credenciales simples (luego se puede hacer con BD)
    if ($usuario == "admin" && $clave == "1234") {

        $_SESSION["admin"] = true;
        header("Location: inscritos.php");
        exit();

    } else {
        $mensaje = "❌ Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

  <div class="card shadow-lg mx-auto p-4" style="max-width: 400px;">
    <h3 class="text-center fw-bold mb-4">🔐 Acceso Admin</h3>

    <?php if($mensaje): ?>
      <div class="alert alert-danger text-center">
        <?= $mensaje ?>
      </div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Contraseña</label>
        <input type="password" name="clave" class="form-control" required>
      </div>

      <button class="btn btn-primary w-100 fw-bold">
        Entrar
      </button>
    </form>

  </div>

</div>

</body>
</html>
