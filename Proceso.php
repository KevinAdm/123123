<!DOCTYPE HTML>
<html>
<head>
<title>
Proceso
</title>
</head>
<body >

<?

$numero1=$_REQUEST[numero1];
$numero2=$_REQUEST[numero2] ;
$operacion=$_REQUEST[operacion];


if($operacion=="S"){
 $resultado=$numero1 + $numero2 ;
  echo "Suma ".$numero1."  +  ".$numero2." = ".$resultado;
}
elseif($operacion=="R"){
       $resultado=$numero1 - $numero2 ;
        echo "Resta ".$numero1."  -  ".$numero2." = ".$resultado;

}
 elseif($operacion=="M"){
       $resultado=$numero1 * $numero2 ;
       echo "Multilplicacion ".$numero1."  x  ".$numero2." = ".$resultado;

}
 elseif($operacion=="D"){
       $resultado=$numero1 / $numero2 ;
        echo "Division ".$numero1."  /  ".$numero2." = ".$resultado;

}  else{

echo "ERROR: Por favor selecciones una operacion";
}

?>
</body>

</html>
