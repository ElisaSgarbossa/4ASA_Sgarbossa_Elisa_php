<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menù Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
 $piatti = array("Margherita" => ["5,00€","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSov8JVet58F_Twnfnj8zcYaUVCcxIr7BskMQ&usqp=CAU"], "Quattro stagioni" => ["6,00€","https://assets.wsimgs.com/wsimgs/ab/images/dp/recipe/202331/0070/img36l.jpg"], "Contadina" =>["6,00€","https://www.cuocicuoci.com/wp-content/uploads/2021/06/contadina.jpg"], "Vulcano" =>["7,00€","https://media-cdn.tripadvisor.com/media/photo-s/07/cb/b8/24/novita-pizza-provola.jpg"], "Marinara" =>["4,00€","https://img.delicious.com.au/qRrzAHSr/del/2019/03/marinara-pizza-102752-2.jpg"], " Capricciosa" =>["6,00€", "https://www.buttalapasta.it/wp-content/uploads/2017/11/pizza-capricciosa.jpg"], "Patate al forno e Salsiccia" =>["8,00€", "https://shop.eismann.it/upload/product-box-theme/it/33162-pizza-suprema-salsiccia-e-patate-K-20220303.jpg"], "Tirolese" =>["7,00€","https://assets.wsimgs.com/wsimgs/ab/images/dp/recipe/202331/0070/img36l.jpg"], "Verdure grigliate" =>["6,00€","https://blog.giallozafferano.it/dolcesalatomiky/wp-content/uploads/2021/06/DSC_0101-1000x667.jpg"], "Patatosa" =>["7,00€","https://www.pizzeriagiuseppesalsiera.it/wp-content/uploads/2021/01/WhatsApp-Image-2021-01-19-at-14.03.20.jpeg" ]);
?> 
<body style="background-color: #F5F092; font-family: cursive;"> 
<nav class="navbar" style="background-color:#c2746d">
  <div class="container-fluid">
    <a class="navbar-brand  text-white" href="https://www.giallozafferano.it/">
      <img src="https://images.vexels.com/media/users/3/131779/isolated/preview/3d4929d289ad98ad71637d5c257d2f08-pizza-logo-1.png" alt="Logo" width="45" class="d-inline-block align-text-top">
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
echo "<center><div class='card mb-3'style='max-width: 900px;'>";
echo "<div class='row g-0'>";
echo "<div class='col-md-4'>";
echo "<img src=".$p[1]." style='width:300px'; border-radius: '5px';>";
echo "</div>";
echo "<div class='col-md-8'>";
echo "<div class='card-body'><center>";
echo "<h3 class='card-title'>".$n."</h3>";
echo "<p class='card-text'>".$p[0]."</p></center>";
echo "<p class='card-text'><small class='text-body-secondary'>Disponibile anche d'asporto</small></p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div> </center>";
}
?>
<br>
<footer class="footer mt-auto py-3" style="background-color: #c2746d;">
        <div class="container">
          <span class="text-light">
          <div style="width: 30%; align:left"><img src="https://png.pngtree.com/png-vector/20220705/ourmid/pngtree-pizza-logo-design-png-image_5683063.png" style="width: 100px"></div>
          <div style="align: right">
            <h5 style="text-align: right"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
              <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
            </svg> Pizzeria Paradiso </h5>
            <p style="text-align: right">Tel. 0450909210</p>
            <p style="text-align: right">Mar-Dom 18.30/22.30</p>
            </div>
          </span>
        </div>
      </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
