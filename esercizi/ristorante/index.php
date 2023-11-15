<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menù Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
 $piatti = array("Margherita" =>"5,00€", "Quattro stagioni" =>"6,00€", "Contadina" =>"6,00€", "Vulcano" =>"7,00€", "Marinara" =>"4,00€", " Capricciosa" =>"6,00€", "Patate al forno e Salsiccia" =>"8,00€", "Tirolese" =>"7,00€", "Verdure grigliate" =>"6,00€", "Patatosa" =>"7,00€");
?> 
<body style="background-color: #F5F092;"> 
<nav class="navbar" style="background-color:#c2746d">
  <div class="container-fluid">
    <a class="navbar-brand  text-white" href="https://www.giallozafferano.it/">
      <img src="https://images.vexels.com/media/users/3/131779/isolated/preview/3d4929d289ad98ad71637d5c257d2f08-pizza-logo-1.png" alt="Logo" width="30" class="d-inline-block align-text-top">
      Pizzeria Paradiso
    </a>
  </div>
</nav>
<div class="mt-4 p-5 text-white rounded" style="text-align:center; background-color: #eb9677;">
        <img src="https://png.pngtree.com/png-vector/20220705/ourmid/pngtree-pizza-logo-design-png-image_5683063.png">
        <h1 style="font-weight: bolder; font-size: xxx-large;">Pizzeria Paradiso</h1>
        <h2>Pizza da favola</h2>
</div>
<br>
<?php
foreach($piatti as $n => $p){
echo "<center><div class='card mb-3' style='max-width: 1040px;'>";
echo "<div class='row g-0'>";
echo "<div class='col-md-4'>";
echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Pizza-3007395.jpg/800px-Pizza-3007395.jpg' class='img-fluid rounded-start' >";
echo "</div>";
echo "<div class='col-md-8'>";
echo "<div class='card-body'>";
echo "<h3 class='card-title'>".$n."</h3>";
echo "<p class='card-text'>".$p."</p>";
echo "<p class='card-text'><small class='text-body-secondary'>Last updated 3 mins ago</small></p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div> </center>";
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>