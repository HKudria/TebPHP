<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script></head>
<body>
<div style="height: 400px; width: 900px;margin: auto">
    <canvas id="barChart"></canvas>
</div>
<script>
    $(function (){
        var datas = <?php echo json_encode($datas); ?>;

    var barCanvas = $("#barChart");
    var barChart = new Chart(barCanvas, {
        type: 'bar',
        data: {
            labels: ['styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'pazdrzirnik', 'listopad', 'grudzień'],
            datasets: [
                {
                    label: 'Dane z wykresu',
                    data: datas,
                    backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'pink', 'purple', 'grey', 'brown', 'black', 'teal']
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    })


</script>
</body>
</html>
