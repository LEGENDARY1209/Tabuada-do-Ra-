<!DOCTYPE html>
<html>
<head>
  <title>Tabuada do Raí</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: left;
    }

    h1 {
      color: #444;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
    }

    table td {
      padding: 5px 10px;
      border: 1px solid #333;
    }
  </style>
</head>
<body>
  <?php
  if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    echo "<h1>Tabuada do $numero</h1>";
    echo "<table>";
    for ($i = 0; $i <= 10; $i++) {
      $resultado = $numero * $i;
      echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
    }
    echo "</table>";
  }
  ?>
</body>
</html>