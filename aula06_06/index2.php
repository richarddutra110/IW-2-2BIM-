<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php


$vi = [1,0,1,1,4,3,0,0,1];
$ano = [1971, 1972, 1973, 1974, 1975, 1976, 1977, 1978, 1979, 1980];
$tam = count($vi);
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['anos', 'vitórias por ano'],
          <?php
                for($i=0;$i<$tam;$i++){
                    ?>
                        ['<?= $ano[$i]; ?>',  <?= $vi[$i]; ?>],


                    <?php

                }

            ?>

        ]);

        var options = {
          title: 'Gráfico de vitórias do fluminense de 1971 até 1980'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>



<body>
    

<div id="piechart" style="width: 900px; height: 500px;"></div>





</body>
</html>