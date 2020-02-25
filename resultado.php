<!doctype html>
<html>

<head>
    <title>Forecast Weather using OpenWeatherMap with PHP</title>
</head>

<body>
<?php include('controller.php') ?>

<div><?php echo date("jS F, Y", $currentTime); ?></div>

</div>
<div class="weather-forecast">
    <?php echo $data->list[0]->main->temp; ?>°C
    
</div>
<div class="time">
    <div>Humidity: <?php echo -$data->list[0]->main->temp_max; ?> %%</div>
    <div>Wind: <?php echo $data->list[0]->wind->speed; ?> km/h</div>
</div>
</div>
</body>

</html>