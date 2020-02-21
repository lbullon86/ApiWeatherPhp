<!doctype html>
<html>

<head>
    <title>Forecast Weather using OpenWeatherMap with PHP</title>
</head>

<body>
    <?php include('controller.php') ?>
    <div class="report-container">
        <h2><?php echo $data->city->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y", $currentTime); ?></div>

        </div>
        <div class="weather-forecast">
            <?php echo $data->list[0]->main->temp; ?>°F
            
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->list[0]->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->list[0]->wind->speed; ?> km/h</div>
        </div>
    </div>
</body>

</html>