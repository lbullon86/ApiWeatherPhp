<?php 

function FarToDeg($far){

    $degres = ($far-32)*(5/9);
    return round($degres);
}

?>