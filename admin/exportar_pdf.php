<?php
require("../fpdf/fpdf.php");
include("../includes/config.php");

// Crear PDF
$pdf = new FPDF();
$pdf->AddPage();

// Título
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(0, 10, "Lista de Inscritos - Congreso UTP", 0, 1, "C");

$pdf->Ln(5);

// Encabezado tabla
$pdf->SetFont("Arial", "B", 10);
$pdf->Cell(10, 10, "ID", 1);
$pdf->Cell(50, 10, "Nombre", 1);
$pdf->Cell(50, 10, "Carrera", 1);
$pdf->Cell(15, 10, "Ano", 1);
$pdf->Cell(65, 10, "Conferencias", 1);
$pdf->Ln();

// Datos desde BD
$pdf->SetFont("Arial", "", 9);

$sql = "SELECT * FROM inscripciones ORDER BY fecha_registro DESC";
$resultado = $conn->query($sql);

while ($fila = $resultado->fetch_assoc()) {

    $pdf->Cell(10, 10, $fila["id"], 1);
    $pdf->Cell(50, 10, utf8_decode($fila["nombre_completo"]), 1);
    $pdf->Cell(50, 10, utf8_decode($fila["carrera"]), 1);
    $pdf->Cell(15, 10, $fila["anio"], 1);

    // Conferencias recortadas para que no se salga
    $conf = substr($fila["conferencias"], 0, 30) . "...";
    $pdf->Cell(65, 10, utf8_decode($conf), 1);

    $pdf->Ln();
}

// Salida PDF
$pdf->Output("D", "inscritos_congreso.pdf");
?>
