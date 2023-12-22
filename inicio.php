<?php
include 'template/menu.php';
?>
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .dashboard-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            width: 30%;
            box-sizing: border-box;
            min-width: 250px;
            max-width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
<br><br><br><br>
<div class="container">
<main id="main">
<div id="datos">
    <!-- Aquí van tus datos del dashboard -->
    <h2>Datos del Dashboard</h2>
    <p>Coloca aquí tus datos y gráficos.</p>
</div>

  </main><!-- End #main -->
</div>

<?php
include 'template/footeradmin.php';
?>

