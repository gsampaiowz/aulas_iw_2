<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo gráfico de barras</title>
    <style>
        body {
            color: aliceblue;
            background-color: steelblue;
            text-align: center;
            margin-top: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }

        .graphs{
          margin-left: 25em;

        }
    </style>
</head>
<body>

    <?php
        $dados = [15,30,25,56,45,90];
        $exp = [90,45,25,56,30,15];
        $mes = ['jan','fev','mar','abr','mai','jun'];
        $tam = count($dados);
        echo "Temos $tam dados neste gráfico";
    ?>
    <div class="graphs">
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          <?php
            for($i=0;$i<$tam;$i++){
                ?>
                ['<?= $mes[$i]; ?>',  <?= $dados[$i]; ?>, <?= $exp[$i]; ?>],
                <?php
            } 
          ?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    </div>
</body>
</html>l