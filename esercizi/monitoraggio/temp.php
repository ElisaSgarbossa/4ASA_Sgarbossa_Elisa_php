<!DOCTYPE html>
<title>Monitoraggio con ESP32</title>
<?php
//trasformiamo la stringa in un array
//$dati = json_decode(file_get_contents('raccolta_dati.txt')); //i dati vengono presi da un file di testo (dove la scheda li aveva salvati)
$dati = array(array("temp" => "0.00", "hum" => "0.00", "date" => "2023-12-05 09:33:47"), array("temp" => "4.00", "hum" => "79.00", "date" => "2023-12-05 09:34:02"),array("temp" => "10.00", "hum" => "38.00", "date" => "2023-12-05 09:34:09"),array("temp" => "7.00", "hum" => "7.00", "date" => "2023-12-05 09:34:16"),array("temp" => "4.00", "hum" => "96.00", "date" => "2023-12-05 09:34:23"),array("temp" => "19.00", "hum" => "118.00", "date" => "2023-12-05 09:34:31"));
?>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  <?php
            foreach ($dati as $val => $array) {
                echo "Chiave esterna: $val <br>";
            
                foreach ($array as $item => $valore) {
                    echo "La chiave è: $item, il valore è: $valore <br>";
                }
            }
            ?>
  new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        datasets: [{
                label: 'Temperatura',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.3
            },
            {
                label: 'Umidità',
                data: [43, 99, 23, 71, 109, 49, 30],
                fill: false,
                borderColor: 'rgb(45, 218, 92)',
                tension: 0.3
            }]
            },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
 
</html>