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
    <div class="col-4 offset-4">
    <form method="POST" >
 
 <select multiple class="form-control" name="ciudad" id="">
   <option value="2510911">Sevilla</option>
   <option value="6359304">Madrid</option>
   <option value="2673730">Barcelona</option>
    </select>
    <input type="submit" name="enviar" class="btn btn-primary" value ="Enviar"/>
    
    </form>
    </div>

     </div>
  <?php 
    include('controller.php');
    include('functions.php');
    if($var){?>
    <div class="row">
    <div class="col-6">
    Fecha:<?php echo date("jS F, Y", $currentTime); ?>
    </div>
    <div class="col-6">
    Ciudad:<?php echo $data->city->name; ?>
    </div>
     <table class="table stripped">
       <thead class="thead-dark">
         <tr>
         <th>Hora</th>  

           <th>Humedad</th>
           <th>Temperatura</th>
           <th>Viento</th>

         </tr>
       </thead>
       <tbody>
       <?php foreach ($data->list as $list) {
         
        ?>
         <tr>
         <td scope="row"><?php echo explode(" ",$list->dt_txt)[1]?></td>
           <td >
            <?php echo FarToDeg($list->main->temp); ?>°C</td>
           <td><?php echo $list->main->humidity; ?> %</td>
           <td><?php echo $list->wind->speed; ?> km/h</td>
         </tr>
       <?php }?>
       </tbody>
     </table>
    
    
</div>
<?php } ?>
</div>
 
</body>

</html>