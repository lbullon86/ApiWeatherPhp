<?php 

function FarToDeg($far){

    $degres = ($far-32)*0.055;
    return round($degres);
}

?>