<?php

$fp=fopen("miarchivo.txt","w");

$TEXTO="holaaaa";
fwrite($fp,$TEXTO);
fclose($fp);
$file="miarchivo.txt";
$fp=fopen("miarchivo.txt","w");
$TEXTO="todos somos ignorantes,lo que pasa es que no todos imaguinamos las mismas cosas  ";
$fwrite($fp,$TEXTO);
$datos= stat($file);
echo $datos[9];//enlaces 
"      "


 ?>