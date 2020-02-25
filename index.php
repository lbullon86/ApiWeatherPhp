<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
   
<body>
    <div class="container">
    <div class="row">
    <div class="col-4">
    <form method="POST" >
 
 <select multiple class="form-control" name="ciudad" id="">
   <option value="6361046">Sevilla</option>
   <option value="6359304">Madrid</option>
   <option value="6356055">Barcelona</option>
    </select>
    <input type="submit" name="enviar" class="btn btn-primary" value ="Enviar"/>
    
    </form>
    </div>

  <?php 
    include('controller.php');
    include('functions.php');
    if($var){?>
      <div class="col-5"> 
      Fecha:<?php echo date("jS F, Y", $currentTime); ?>
      Ciudad:<?php echo $data->city->name; ?>


      <table>
     <table class="table stripped justify-center">
     <thead class="thead-dark">
    <tr>
      <th>Máx</th>
      <th>Min</th>
      <th>Temp Actual</th>
      <th>Sensación térmica</th>
      <th>Viento</th>
      <th>Tiempo</th>    
    </tr>

    <tr>
      <td><?php echo round($data->list[0]->main->temp_max)."ºC" ?></td>
      <td><?php echo round($data->list[0]->main->temp_min)."ºC" ?></td>
      <td><?php echo round($data->list[0]->main->temp)."ºC" ?></td>
      <td><?php echo round($data->list[0]->main->feels_like)."ºC" ?></td>
      <td><?php echo $data->list[0]->wind->speed ?></td>
      <td><?php echo $data->list[0]->weather[0]->main ?></td>

      
    </tr>

      </table>
      
      </div>
    <div class="row">
      <div class="col-12">
     <table class="table stripped">
       <thead class="thead-dark">
         <tr>
         <th>Hora</th>  
         <th>Temperatura</th>
         <th>Humedad</th>
         <th>Viento</th>

         </tr>
       </thead>
       <tbody>
       <?php foreach ($data->list as $list) {
         
        ?>
         <tr>
         <td scope="row"><?php echo explode(" ",$list->dt_txt)[1]?></td>
           <td >
            <?php echo round($list->main->temp); ?>°C</td>
           <td><?php echo $list->main->humidity; ?> %</td>
           <td><?php echo $list->wind->speed; ?> km/h</td>
         </tr>
       <?php }}?>
       </tbody>
     </table>
    </div>
     </div>

</div>

</div>
 
</body>

</html>