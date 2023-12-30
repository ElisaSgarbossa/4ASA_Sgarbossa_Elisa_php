<!DOCTYPE html>
<title>Monitoraggio con ESP32</title>
<?php
//trasformiamo la stringa in un array
$dati = json_decode(file_get_contents('raccolta_dati.txt')); //i dati vengono presi da un file di testo (dove la scheda li aveva salvati)
?>
<center>
<h1 style="font-family:sans-serif">Grafico monitoraggio umidità e temperatura</h1>
</center>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        datasets: [{
                label: 'Temperatura',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.4,
                borderWidth: 4.4
            },
            {
                label: 'Umidità',
                data: [43, 99, 23, 71, 109, 49, 30],
                fill: false,
                borderColor: 'rgb(145, 78, 92)',
                tension: 0.4,
                borderWidth: 4.4
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