<?php 

$Cotizar=$_GET["cotizar"]; 
if($Cotizar==1){
    echo "<h1>cctv</h1>";
}elseif($Cotizar==2){
    echo "<h1>alarmas</h1>";
}elseif($Cotizar==3){
    echo "<h1>cercas</h1>";
}elseif($Cotizar==4){
    echo "<h1>cerraduras</h1>";
}
?> 
