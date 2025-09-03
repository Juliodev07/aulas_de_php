<?php
$valor = $_REQUEST['valor'];
$apuracao = $_REQUEST['apuração'];

$salario_final = $valor + $apuracao;

echo "<h1>Meu salário final é:</h1>";
echo "Meu salario final é: $salario_final";

?>