<!DOCTYPE html>
<html>
<head>
  <title>Programas en PHP</title>
</head>
<body>

<h2>Punto 1: Calculadora de Ecuación</h2>
<form method="post">
  <label>Ingrese el valor de X:</label>
  <input type="number" name="x" required>
  <label>Ingrese el valor de Z:</label>
  <input type="number" name="z" required>
  <input type="submit" value="Calcular">
</form>

<?php
if ($_POST && isset($_POST['x']) && isset($_POST['z'])) {
  $x = $_POST['x'];
  $z = $_POST['z'];
  $y = calcularEcuacion($x, $z);
  echo "<p>Para X = $x, Z = $z, la ecuación Y = X * Z + Z + X es: $y</p>";
}
?>

<hr>


<h2>Punto 2: Tabla de Multiplicar</h2>
<form method="post">
  <label>Ingrese un número:</label>
  <input type="number" name="numeroTabla" required>
  <input type="submit" value="Generar Tabla">
</form>

<?php
if ($_POST && isset($_POST['numeroTabla'])) {
  $numeroTabla = $_POST['numeroTabla'];
  echo "<h3>Tabla de multiplicar del $numeroTabla:</h3>";
  generarTablaMultiplicar($numeroTabla);
}
?>

<hr>


<h2>Punto 3: Costo de Llamada Telefónica</h2>
<form method="post">
  <label>Duración de la llamada (en minutos):</label>
  <input type="number" name="duracion" required>
  <input type="submit" value="Calcular Costo">
</form>

<?php
if ($_POST && isset($_POST['duracion'])) {
  $duracion = $_POST['duracion'];
  $costo = calcularCostoLlamada($duracion);
  echo "<p>El costo de la llamada de $duracion minutos es: $$costo</p>";
}
?>

<hr>


<h2>Punto 4: Cálculo de Áreas</h2>
<form method="post">
  <label>Ingrese el radio del círculo:</label>
  <input type="number" name="radioCirculo" required>
  <input type="submit" value="Calcular Área del Círculo">
</form>

<?php
if ($_POST && isset($_POST['radioCirculo'])) {
  $radioCirculo = $_POST['radioCirculo'];
  $areaCirculo = calcularAreaCirculo($radioCirculo);
  echo "<p>Área del círculo con radio $radioCirculo: $areaCirculo</p>";
}
?>


<?php
function calcularEcuacion($x, $z) {
  return $x * $z + $z + $x;
}

function generarTablaMultiplicar($numero) {
  echo "<ul>";
  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<li>$numero x $i = $resultado</li>";
  }
  echo "</ul>";
}

function calcularCostoLlamada($duracion) {
  $costoBase = 200;
  $costoAdicionalPorMinuto = 50;
  
  if ($duracion <= 3) {
    return $costoBase;
  } else {
    $costoAdicional = ($duracion - 3) * $costoAdicionalPorMinuto;
    return $costoBase + $costoAdicional;
  }
  }
?>

<h2>Punto 4: Cálculo de Áreas</h2>
<form method="post">
  <label>Ingrese el radio del círculo:</label>
  <input type="number" name="radioCirculo" required>
  <input type="submit" value="Calcular Área del Círculo">
</form>

<?php
if ($_POST && isset($_POST['radioCirculo'])) {
  $radioCirculo = $_POST['radioCirculo'];
  $areaCirculo = calcularAreaCirculo($radioCirculo);
  echo "<p>Área del círculo con radio $radioCirculo: $areaCirculo</p>";
}
?>

<form method="post">
  <label>Ingrese el lado del cuadrado:</label>
  <input type="number" name="ladoCuadrado" required>
  <input type="submit" value="Calcular Área del Cuadrado">
</form>

<?php
if ($_POST && isset($_POST['ladoCuadrado'])) {
  $ladoCuadrado = $_POST['ladoCuadrado'];
  $areaCuadrado = calcularAreaCuadrado($ladoCuadrado);
  echo "<p>Área del cuadrado con lado $ladoCuadrado: $areaCuadrado</p>";
}
?>

<form method="post">
  <label>Ingrese la base del triángulo:</label>
  <input type="number" name="baseTriangulo" required><br><br>

  
  <label>Ingrese la altura del triángulo:</label>
  <input type="number" name="alturaTriangulo" required>
  <input type="submit" value="Calcular Área del Triángulo">
</form>
<br><br>
<?php
if ($_POST && isset($_POST['baseTriangulo']) && isset($_POST['alturaTriangulo'])) {
  $baseTriangulo = $_POST['baseTriangulo'];
  $alturaTriangulo = $_POST['alturaTriangulo'];
  $areaTriangulo = calcularAreaTriangulo($baseTriangulo, $alturaTriangulo);
  echo "<p>Área del triángulo con base $baseTriangulo y altura $alturaTriangulo: $areaTriangulo</p>";
}
?>


<?php
function calcularAreaCirculo($radio) {
  return M_PI * pow($radio, 2);
}

function calcularAreaCuadrado($lado) {
  return pow($lado, 2);
}

function calcularAreaTriangulo($base, $altura) {
  return 0.5 * $base * $altura;
}



?>
</body>
</html>
