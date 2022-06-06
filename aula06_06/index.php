<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php


$dados = [1000,80,1380,500,1000,3000];
$mes = ['jan','fev','mar','abr','mai','jun'];
$tam = count($dados);
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
            <?php
                for($i=0;$i<$tam;$i++){
                    ?>
                        ['<?= $mes[$i]; ?>',  <?= $dados[$i]; ?>],


                    <?php

                }

            ?>

        ]);

        var options = {
          title: 'pato',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

<body>
    
<div id="curve_chart" style="width: 900px; height: 500px"></div>





</body>
</html>