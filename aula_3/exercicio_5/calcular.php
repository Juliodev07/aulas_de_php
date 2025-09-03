<?php
$baseMaior = $_REQUEST['baseMaior'];
$baseMenor = $_REQUEST['baseMenor'];
$altura =$_REQUEST['altura'];

$area = (($baseMaior + $baseMenor) * $altura) /2;

echo "<h1> O resultado do Cálculo da áre da base do trapézio:</h1>";
echo $area

?>