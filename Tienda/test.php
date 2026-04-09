<?php
$producto=$_REQUEST["producto"];
$cantidad=$_REQUEST["cantidad"];
$metodoPago=$_REQUEST["metodoPago"];

if($producto=="Mouse"){
    $precio=15000;
} elseif($producto=="Teclado"){
    $precio=20000;
} elseif($producto=="Parlantes"){
    $precio=30000;
} elseif($producto=="Auriculares"){
    $precio=35000;
}

$total=$precio*$cantidad;

echo "Compraste ". $cantidad . " " . $producto . ", dando un total de $" . $total . " que pagas en " . $metodoPago . "<br>";
if($cantidad>=5){
    echo "Por comprar 5 o más unidades, recibiste un Cupón de Envio Gratis.";
}
?>