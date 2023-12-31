<!DOCTYPE html>
<html>
<body>
<div>   <canvas id="myChart"></canvas> </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: [1, 2, 3, 4, 5, 6],
      datasets: [{
        label: 'temperatura',
        data: [18.7, 17.1, 18.9, 16.0, 14.2, 20.8],
        borderWidth: 1
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
</script>
</body>
</html>
